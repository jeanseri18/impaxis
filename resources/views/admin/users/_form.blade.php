@php
    $item = $user ?? null;
    $editing = $editing ?? false;
@endphp

<div class="col-md-6">
    <label class="form-label" for="name">Nom</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
           value="{{ old('name', $item->name ?? '') }}" required>
    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="col-md-6">
    <label class="form-label" for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
           value="{{ old('email', $item->email ?? '') }}" required>
    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="col-md-6">
    <label class="form-label" for="password">Mot de passe {{ $editing ? '(laisser vide pour conserver)' : '' }}</label>
    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror"
           {{ $editing ? '' : 'required' }} autocomplete="new-password">
    @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="col-md-6">
    <label class="form-label" for="password_confirmation">Confirmer le mot de passe</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" autocomplete="new-password">
</div>

<div class="col-md-6">
    <label class="form-label" for="role">Rôle</label>
    <select name="role" id="role" class="form-select @error('role') is-invalid @enderror" required>
        <option value="admin" @selected(old('role', $item->role ?? 'admin') === 'admin')>Admin</option>
    </select>
    @error('role') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="col-md-6 d-flex align-items-end">
    <div class="form-check form-switch mb-2">
        <input type="hidden" name="is_active" value="0">
        <input class="form-check-input" type="checkbox" role="switch" id="is_active" name="is_active" value="1"
               @checked(old('is_active', $item->is_active ?? true))>
        <label class="form-check-label" for="is_active">Compte actif</label>
    </div>
</div>
