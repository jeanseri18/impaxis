<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamMemberController extends Controller
{
    public function index(Request $request)
    {
        $query = TeamMember::orderBy('name');

        if ($request->filled('lang')) {
            $query->where('lang', $request->lang);
        }

        if ($request->filled('q')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->q . '%')
                    ->orWhere('role', 'like', '%' . $request->q . '%');
            });
        }

        $members = $query->paginate(10)->withQueryString();

        return view('admin.team.index', compact('members'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'lang' => 'required|in:fr,en',
            'experience' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'linkedin' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'facebook' => 'nullable|url|max:255',
            'avatar' => 'nullable|image|max:4096',
        ]);

        $member = TeamMember::create([
            'name' => $validated['name'],
            'role' => $validated['role'],
            'lang' => $validated['lang'],
            'experience' => $validated['experience'] ?? null,
            'bio' => $validated['bio'] ?? null,
            'linkedin' => $validated['linkedin'] ?? null,
            'twitter' => $validated['twitter'] ?? null,
            'facebook' => $validated['facebook'] ?? null,
            'slug' => $this->uniqueSlug($validated['name']),
        ]);

        if ($request->hasFile('avatar')) {
            $member->addMediaFromRequest('avatar')->toMediaCollection('avatarTeam');
        }

        return redirect()
            ->route('admin.team.index')
            ->with('success', 'Membre ajouté avec succès.');
    }

    public function edit(TeamMember $member)
    {
        return view('admin.team.edit', compact('member'));
    }

    public function update(Request $request, TeamMember $member)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'lang' => 'required|in:fr,en',
            'experience' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'linkedin' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'facebook' => 'nullable|url|max:255',
            'avatar' => 'nullable|image|max:4096',
        ]);

        $member->update([
            'name' => $validated['name'],
            'role' => $validated['role'],
            'lang' => $validated['lang'],
            'experience' => $validated['experience'] ?? null,
            'bio' => $validated['bio'] ?? null,
            'linkedin' => $validated['linkedin'] ?? null,
            'twitter' => $validated['twitter'] ?? null,
            'facebook' => $validated['facebook'] ?? null,
            'slug' => $member->name !== $validated['name']
                ? $this->uniqueSlug($validated['name'], $member->id)
                : $member->slug,
        ]);

        if ($request->hasFile('avatar')) {
            $member->addMediaFromRequest('avatar')->toMediaCollection('avatarTeam');
        }

        return redirect()
            ->route('admin.team.index')
            ->with('success', 'Membre mis à jour avec succès.');
    }

    public function destroy(TeamMember $member)
    {
        $member->clearMediaCollection('avatarTeam');
        $member->delete();

        return redirect()
            ->route('admin.team.index')
            ->with('success', 'Membre supprimé.');
    }

    private function uniqueSlug(string $name, ?int $ignoreId = null): string
    {
        $base = Str::slug($name);
        $slug = $base;
        $i = 1;

        while (
            TeamMember::where('slug', $slug)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $base . '-' . $i++;
        }

        return $slug;
    }
}
