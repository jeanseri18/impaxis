@extends('admin.layouts.app')

@section('title', 'Tableau de bord')
@section('page-title', 'Tableau de bord')
@section('page-subtitle', 'Vue d’ensemble du site vitrine Impaxis')

@section('content')
<div class="stat-grid">
    <div class="stat-card">
        <div class="label">Articles publiés</div>
        <div class="value">{{ $stats['articles_published'] }}</div>
        <div class="hint">{{ $stats['articles_draft'] }} brouillon(s)</div>
    </div>
    <div class="stat-card">
        <div class="label">Articles au total</div>
        <div class="value">{{ $stats['articles_total'] }}</div>
        <div class="hint">Visibles côté site vitrine</div>
    </div>
    <div class="stat-card">
        <div class="label">Membres d’équipe</div>
        <div class="value">{{ $stats['team_members'] }}</div>
        <div class="hint">Page À propos</div>
    </div>
    <div class="stat-card">
        <div class="label">Comptes admin</div>
        <div class="value">{{ $stats['users'] }}</div>
        <div class="hint">{{ $stats['categories'] }} catégories</div>
    </div>
</div>

<div class="row g-3">
    <div class="col-lg-7">
        <div class="panel h-100">
            <div class="panel-header">
                <h2>Derniers articles</h2>
                <a href="{{ route('admin.actualities.create') }}" class="btn btn-sm btn-accent">Ajouter</a>
            </div>
            <div class="table-responsive">
                <table class="table table-admin align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Langue</th>
                            <th>Statut</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($recentArticles as $article)
                            <tr>
                                <td>
                                    <strong>{{ Str::limit($article->title, 45) }}</strong>
                                    <div class="text-muted small">{{ $article->category?->title ?? 'Sans catégorie' }}</div>
                                </td>
                                <td><span class="badge badge-lang">{{ strtoupper($article->lang) }}</span></td>
                                <td>
                                    @if ($article->is_published)
                                        <span class="badge badge-pub">Publié</span>
                                    @else
                                        <span class="badge badge-draft">Brouillon</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('admin.actualities.edit', $article) }}" class="btn btn-sm btn-outline-secondary">Modifier</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="empty-state">Aucun article pour le moment.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-5">
        <div class="panel h-100">
            <div class="panel-header">
                <h2>Équipe récente</h2>
                <a href="{{ route('admin.team.create') }}" class="btn btn-sm btn-accent">Ajouter</a>
            </div>
            <div class="panel-body">
                @forelse ($recentTeam as $member)
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="{{ $member->getAvatarFullUrl() }}" alt="{{ $member->name }}" width="44" height="44" class="rounded-circle object-fit-cover" style="object-fit:cover;">
                        <div class="flex-grow-1">
                            <strong>{{ $member->name }}</strong>
                            <div class="text-muted small">{{ $member->role }} · {{ strtoupper($member->lang) }}</div>
                        </div>
                        <a href="{{ route('admin.team.edit', $member) }}" class="btn btn-sm btn-outline-secondary">Éditer</a>
                    </div>
                @empty
                    <div class="empty-state">Aucun membre d’équipe.</div>
                @endforelse
            </div>
        </div>
    </div>
</div>

<div class="panel mt-3">
    <div class="panel-header">
        <h2>Accès rapide — site visiteur</h2>
    </div>
    <div class="panel-body d-flex flex-wrap gap-2">
        <a href="{{ route('front.welcome', ['locale' => 'fr']) }}" target="_blank" class="btn btn-impaxis">Accueil FR</a>
        <a href="{{ route('front.actualities', ['locale' => 'fr']) }}" target="_blank" class="btn btn-outline-secondary">Actualités</a>
        <a href="{{ route('front.about', ['locale' => 'fr']) }}" target="_blank" class="btn btn-outline-secondary">Équipe / À propos</a>
        <a href="{{ route('front.contact', ['locale' => 'fr']) }}" target="_blank" class="btn btn-outline-secondary">Contact</a>
    </div>
</div>
@endsection
