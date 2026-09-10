@extends('admin.layouts.app')

@section('title', 'Équipe')
@section('page-title', 'Équipe')
@section('page-subtitle', 'Gérer les membres affichés sur le site')

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Membres de l’équipe</h2>
        <a href="{{ route('admin.team.create') }}" class="btn btn-accent">
            <i class="bi bi-plus-lg"></i> Ajouter un membre
        </a>
    </div>
    <div class="panel-body">
        <form method="GET" class="filters-bar">
            <input type="text" name="q" value="{{ request('q') }}" class="form-control" placeholder="Nom ou rôle…" style="max-width:220px">
            <select name="lang" class="form-select" style="max-width:140px">
                <option value="">Toutes langues</option>
                <option value="fr" @selected(request('lang') === 'fr')>FR</option>
                <option value="en" @selected(request('lang') === 'en')>EN</option>
            </select>
            <button class="btn btn-impaxis" type="submit">Filtrer</button>
        </form>

        <div class="table-responsive">
            <table class="table table-admin">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Rôle</th>
                        <th>Langue</th>
                        <th>Expérience</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($members as $member)
                        <tr>
                            <td>
                                <img src="{{ $member->getAvatarFullUrl() }}" alt="" width="44" height="44" class="rounded-circle" style="object-fit:cover;">
                            </td>
                            <td><strong>{{ $member->name }}</strong></td>
                            <td>{{ $member->role }}</td>
                            <td><span class="badge badge-lang">{{ strtoupper($member->lang) }}</span></td>
                            <td class="text-muted small">{{ $member->experience ?? '—' }}</td>
                            <td class="text-end text-nowrap">
                                <a href="{{ route('admin.team.edit', $member) }}" class="btn btn-sm btn-outline-secondary">Modifier</a>
                                <form action="{{ route('admin.team.destroy', $member) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer ce membre ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" type="submit">Suppr.</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="empty-state">Aucun membre trouvé.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">{{ $members->links('pagination::bootstrap-5') }}</div>
    </div>
</div>
@endsection
