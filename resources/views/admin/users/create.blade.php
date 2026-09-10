@extends('admin.layouts.app')

@section('title', 'Nouvel utilisateur')
@section('page-title', 'Nouvel utilisateur')
@section('page-subtitle', 'Créer un compte administrateur')

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Créer un utilisateur</h2>
        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary btn-sm">Retour</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.users.store') }}" class="row g-3" style="max-width:640px">
            @csrf
            @include('admin.users._form')
            <div class="col-12 d-flex gap-2">
                <button type="submit" class="btn btn-accent">Créer</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">Annuler</a>
            </div>
        </form>
    </div>
</div>
@endsection
