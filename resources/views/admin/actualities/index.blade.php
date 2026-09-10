@extends('admin.layouts.app')

@section('title', 'Articles')
@section('page-title', 'Articles')
@section('page-subtitle', 'Gérer les actualités du site vitrine')

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Liste des articles</h2>
        <a href="{{ route('admin.actualities.create') }}" class="btn btn-accent">
            <i class="bi bi-plus-lg"></i> Ajouter un article
        </a>
    </div>
    <div class="panel-body">
        <form method="GET" class="filters-bar">
            <input type="text" name="q" value="{{ request('q') }}" class="form-control" placeholder="Rechercher…" style="max-width:220px">
            <select name="lang" class="form-select" style="max-width:140px">
                <option value="">Toutes langues</option>
                <option value="fr" @selected(request('lang') === 'fr')>FR</option>
                <option value="en" @selected(request('lang') === 'en')>EN</option>
            </select>
            <select name="status" class="form-select" style="max-width:160px">
                <option value="">Tous statuts</option>
                <option value="published" @selected(request('status') === 'published')>Publiés</option>
                <option value="draft" @selected(request('status') === 'draft')>Brouillons</option>
            </select>
            <button class="btn btn-impaxis" type="submit">Filtrer</button>
        </form>

        <div class="table-responsive">
            <table class="table table-admin">
                <thead>
                    <tr>
                        <th>Couverture</th>
                        <th>Titre</th>
                        <th>Catégorie</th>
                        <th>Langue</th>
                        <th>Statut</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($actualities as $item)
                        <tr>
                            <td>
                                <img src="{{ $item->getCoverFullUrl() }}" alt="" width="56" height="40" style="object-fit:cover;border-radius:.4rem;">
                            </td>
                            <td>
                                <strong>{{ Str::limit($item->title, 50) }}</strong>
                            </td>
                            <td>{{ $item->category?->title ?? '—' }}</td>
                            <td><span class="badge badge-lang">{{ strtoupper($item->lang) }}</span></td>
                            <td>
                                @if ($item->is_published)
                                    <span class="badge badge-pub">Publié</span>
                                @else
                                    <span class="badge badge-draft">Brouillon</span>
                                @endif
                            </td>
                            <td class="text-muted small">{{ $item->created_at?->format('d/m/Y') }}</td>
                            <td class="text-end text-nowrap">
                                <a href="{{ route('admin.actualities.edit', $item) }}" class="btn btn-sm btn-outline-secondary">Modifier</a>
                                <form action="{{ route('admin.actualities.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cet article ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" type="submit">Suppr.</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="empty-state">Aucun article trouvé.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">{{ $actualities->links('pagination::bootstrap-5') }}</div>
    </div>
</div>
@endsection
