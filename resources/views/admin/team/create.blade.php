@extends('admin.layouts.app')

@section('title', 'Nouveau membre')
@section('page-title', 'Nouveau membre')
@section('page-subtitle', 'Ajouter un profil à l’équipe')

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Créer un membre</h2>
        <a href="{{ route('admin.team.index') }}" class="btn btn-outline-secondary btn-sm">Retour</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.team.store') }}" enctype="multipart/form-data">
            @csrf
            @include('admin.team._form')
            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-accent">Enregistrer</button>
                <a href="{{ route('admin.team.index') }}" class="btn btn-outline-secondary">Annuler</a>
            </div>
        </form>
    </div>
</div>
@endsection
