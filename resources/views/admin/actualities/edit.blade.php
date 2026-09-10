@extends('admin.layouts.app')

@section('title', 'Modifier l’article')
@section('page-title', 'Modifier l’article')
@section('page-subtitle', $actuality->title)

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Édition</h2>
        <a href="{{ route('admin.actualities.index') }}" class="btn btn-outline-secondary btn-sm">Retour</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.actualities.update', $actuality) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.actualities._form', ['actuality' => $actuality])
            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-accent">Mettre à jour</button>
                <a href="{{ route('admin.actualities.index') }}" class="btn btn-outline-secondary">Annuler</a>
            </div>
        </form>
    </div>
</div>
@endsection
