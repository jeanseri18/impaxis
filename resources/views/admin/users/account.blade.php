@extends('admin.layouts.app')

@section('title', 'Mon compte')
@section('page-title', 'Paramètres du compte')
@section('page-subtitle', 'Modifier vos informations administrateur')

@section('content')
<div class="panel" style="max-width:720px">
    <div class="panel-header">
        <h2>Mon compte admin</h2>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.account.update') }}" class="row g-3">
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <label class="form-label" for="name">Nom</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name', $user->name) }}" required>
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email', $user->email) }}" required>
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-12"><hr></div>

            <div class="col-md-12">
                <p class="text-muted small mb-0">Changer le mot de passe (optionnel)</p>
            </div>

            <div class="col-md-4">
                <label class="form-label" for="current_password">Mot de passe actuel</label>
                <input type="password" name="current_password" id="current_password" class="form-control @error('current_password') is-invalid @enderror" autocomplete="current-password">
                @error('current_password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-4">
                <label class="form-label" for="password">Nouveau mot de passe</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password">
                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-4">
                <label class="form-label" for="password_confirmation">Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" autocomplete="new-password">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-accent">Enregistrer les modifications</button>
            </div>
        </form>
    </div>
</div>
@endsection
