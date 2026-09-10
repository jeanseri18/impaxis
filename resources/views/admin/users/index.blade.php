@extends('admin.layouts.app')

@section('title', 'Utilisateurs')
@section('page-title', 'Utilisateurs')
@section('page-subtitle', 'Comptes administrateurs du back-office')

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Comptes admin</h2>
        <a href="{{ route('admin.users.create') }}" class="btn btn-accent">
            <i class="bi bi-plus-lg"></i> Nouvel utilisateur
        </a>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-admin">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Statut</th>
                        <th>Créé le</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td><strong>{{ $user->name }}</strong></td>
                            <td>{{ $user->email }}</td>
                            <td><span class="badge badge-lang">{{ ucfirst($user->role) }}</span></td>
                            <td>
                                @if ($user->is_active)
                                    <span class="badge badge-pub">Actif</span>
                                @else
                                    <span class="badge badge-draft">Inactif</span>
                                @endif
                            </td>
                            <td class="text-muted small">{{ $user->created_at?->format('d/m/Y') }}</td>
                            <td class="text-end text-nowrap">
                                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-outline-secondary">Modifier</a>
                                @if ($user->id !== auth()->id())
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cet utilisateur ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger" type="submit">Suppr.</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="empty-state">Aucun utilisateur.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-3">{{ $users->links('pagination::bootstrap-5') }}</div>
    </div>
</div>
@endsection
