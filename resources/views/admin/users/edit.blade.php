@extends('admin.layouts.app')

@section('title', 'Modifier l’utilisateur')
@section('page-title', 'Modifier l’utilisateur')
@section('page-subtitle', $user->email)

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Édition du compte</h2>
        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary btn-sm">Retour</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.users.update', $user) }}" class="row g-3" style="max-width:640px">
            @csrf
            @method('PUT')
            @include('admin.users._form', ['user' => $user, 'editing' => true])
            <div class="col-12 d-flex gap-2">
                <button type="submit" class="btn btn-accent">Mettre à jour</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">Annuler</a>
            </div>
        </form>
    </div>
</div>
@endsection
