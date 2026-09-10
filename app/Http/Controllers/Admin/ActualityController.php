<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actuality;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ActualityController extends Controller
{
    public function index(Request $request)
    {
        $query = Actuality::notDeleted()->with(['category', 'author'])->orderByDesc('created_at');

        if ($request->filled('lang')) {
            $query->where('lang', $request->lang);
        }

        if ($request->filled('status')) {
            $query->where('is_published', $request->status === 'published');
        }

        if ($request->filled('q')) {
            $query->where('title', 'like', '%' . $request->q . '%');
        }

        $actualities = $query->paginate(10)->withQueryString();

        return view('admin.actualities.index', compact('actualities'));
    }

    public function create()
    {
        $categories = Category::orderBy('title')->get();

        return view('admin.actualities.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'lang' => 'required|in:fr,en',
            'category_id' => 'nullable|exists:categories,id',
            'is_published' => 'nullable|boolean',
            'cover' => 'nullable|image|max:4096',
        ]);

        $slug = $this->uniqueSlug($validated['title']);
        $isPublished = $request->boolean('is_published');

        $actuality = Actuality::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'content' => $validated['content'],
            'lang' => $validated['lang'],
            'category_id' => $validated['category_id'] ?? null,
            'is_published' => $isPublished,
            'published_at' => $isPublished ? now() : null,
            'user_id' => Auth::id(),
            'created_by' => Auth::id(),
        ]);

        if ($request->hasFile('cover')) {
            $actuality->addMediaFromRequest('cover')->toMediaCollection('actu_cover');
        }

        return redirect()
            ->route('admin.actualities.index')
            ->with('success', 'Article créé avec succès.');
    }

    public function edit(Actuality $actuality)
    {
        if ($actuality->is_deleted) {
            abort(404);
        }

        $categories = Category::orderBy('title')->get();

        return view('admin.actualities.edit', compact('actuality', 'categories'));
    }

    public function update(Request $request, Actuality $actuality)
    {
        if ($actuality->is_deleted) {
            abort(404);
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'lang' => 'required|in:fr,en',
            'category_id' => 'nullable|exists:categories,id',
            'is_published' => 'nullable|boolean',
            'cover' => 'nullable|image|max:4096',
        ]);

        $isPublished = $request->boolean('is_published');

        $actuality->update([
            'title' => $validated['title'],
            'slug' => $actuality->title !== $validated['title']
                ? $this->uniqueSlug($validated['title'], $actuality->id)
                : $actuality->slug,
            'content' => $validated['content'],
            'lang' => $validated['lang'],
            'category_id' => $validated['category_id'] ?? null,
            'is_published' => $isPublished,
            'published_at' => $isPublished
                ? ($actuality->published_at ?? now())
                : null,
            'updated_by' => Auth::id(),
        ]);

        if ($request->hasFile('cover')) {
            $actuality->addMediaFromRequest('cover')->toMediaCollection('actu_cover');
        }

        return redirect()
            ->route('admin.actualities.index')
            ->with('success', 'Article mis à jour avec succès.');
    }

    public function destroy(Actuality $actuality)
    {
        $actuality->update([
            'is_deleted' => true,
            'deleted_at' => now(),
            'deleted_by' => Auth::id(),
            'is_published' => false,
        ]);

        return redirect()
            ->route('admin.actualities.index')
            ->with('success', 'Article supprimé.');
    }

    private function uniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title);
        $slug = $base;
        $i = 1;

        while (
            Actuality::where('slug', $slug)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $base . '-' . $i++;
        }

        return $slug;
    }
}
