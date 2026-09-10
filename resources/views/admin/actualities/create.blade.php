@extends('admin.layouts.app')

@section('title', 'Nouvel article')
@section('page-title', 'Nouvel article')
@section('page-subtitle', 'Ajouter une actualité au site')

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Créer un article</h2>
        <a href="{{ route('admin.actualities.index') }}" class="btn btn-outline-secondary btn-sm">Retour</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.actualities.store') }}" enctype="multipart/form-data">
            @csrf
            @include('admin.actualities._form')
            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-accent">Enregistrer</button>
                <a href="{{ route('admin.actualities.index') }}" class="btn btn-outline-secondary">Annuler</a>
            </div>
        </form>
    </div>
</div>
@endsection
