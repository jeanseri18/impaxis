<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actuality;
use App\Models\TeamMember;
use App\Models\User;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'articles_total' => Actuality::notDeleted()->count(),
            'articles_published' => Actuality::notDeleted()->where('is_published', true)->count(),
            'articles_draft' => Actuality::notDeleted()->where('is_published', false)->count(),
            'team_members' => TeamMember::count(),
            'users' => User::count(),
            'categories' => Category::count(),
        ];

        $recentArticles = Actuality::notDeleted()
            ->with('category')
            ->orderByDesc('created_at')
            ->take(5)
            ->get();

        $recentTeam = TeamMember::orderByDesc('created_at')->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentArticles', 'recentTeam'));
    }
}
