@php $item = $member ?? null; @endphp

<div class="row g-3">
    <div class="col-lg-8">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label" for="name">Nom</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name', $item->name ?? '') }}" required>
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label" for="role">Rôle / poste</label>
                <input type="text" name="role" id="role" class="form-control @error('role') is-invalid @enderror"
                       value="{{ old('role', $item->role ?? '') }}" required>
                @error('role') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label" for="lang">Langue de la fiche</label>
                <select name="lang" id="lang" class="form-select @error('lang') is-invalid @enderror" required>
                    <option value="fr" @selected(old('lang', $item->lang ?? 'fr') === 'fr')>Français</option>
                    <option value="en" @selected(old('lang', $item->lang ?? '') === 'en')>English</option>
                </select>
                @error('lang') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label" for="experience">Expérience</label>
                <input type="text" name="experience" id="experience" class="form-control @error('experience') is-invalid @enderror"
                       value="{{ old('experience', $item->experience ?? '') }}" placeholder="Ex: 10 ans">
                @error('experience') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-12">
                <label class="form-label" for="bio">Biographie</label>
                <textarea name="bio" id="bio" rows="8" class="form-control @error('bio') is-invalid @enderror">{{ old('bio', $item->bio ?? '') }}</textarea>
                @error('bio') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="mb-3">
            <label class="form-label" for="avatar">Photo</label>
            @if ($item)
                <div class="mb-2">
                    <img src="{{ $item->getAvatarFullUrl() }}" alt="" class="avatar-preview">
                </div>
            @endif
            <input type="file" name="avatar" id="avatar" class="form-control @error('avatar') is-invalid @enderror" accept="image/*">
            @error('avatar') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="linkedin">LinkedIn</label>
            <input type="url" name="linkedin" id="linkedin" class="form-control @error('linkedin') is-invalid @enderror"
                   value="{{ old('linkedin', $item->linkedin ?? '') }}" placeholder="https://…">
            @error('linkedin') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="twitter">Twitter / X</label>
            <input type="url" name="twitter" id="twitter" class="form-control @error('twitter') is-invalid @enderror"
                   value="{{ old('twitter', $item->twitter ?? '') }}" placeholder="https://…">
            @error('twitter') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="facebook">Facebook</label>
            <input type="url" name="facebook" id="facebook" class="form-control @error('facebook') is-invalid @enderror"
                   value="{{ old('facebook', $item->facebook ?? '') }}" placeholder="https://…">
            @error('facebook') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>
</div>
