@extends('admin.layouts.app')

@section('title', 'Modifier le membre')
@section('page-title', 'Modifier le membre')
@section('page-subtitle', $member->name)

@section('content')
<div class="panel">
    <div class="panel-header">
        <h2>Édition</h2>
        <a href="{{ route('admin.team.index') }}" class="btn btn-outline-secondary btn-sm">Retour</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.team.update', $member) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.team._form', ['member' => $member])
            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-accent">Mettre à jour</button>
                <a href="{{ route('admin.team.index') }}" class="btn btn-outline-secondary">Annuler</a>
            </div>
        </form>
    </div>
</div>
@endsection
