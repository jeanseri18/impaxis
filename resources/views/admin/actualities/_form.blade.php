@php $item = $actuality ?? null; @endphp

<div class="row g-3">
    <div class="col-lg-8">
        <div class="mb-3">
            <label class="form-label" for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                   value="{{ old('title', $item->title ?? '') }}" required>
            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="content">Contenu</label>
            <textarea name="content" id="content" rows="12" class="form-control @error('content') is-invalid @enderror" required>{{ old('content', $item->content ?? '') }}</textarea>
            @error('content') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>

    <div class="col-lg-4">
        <div class="mb-3">
            <label class="form-label" for="lang">Langue</label>
            <select name="lang" id="lang" class="form-select @error('lang') is-invalid @enderror" required>
                <option value="fr" @selected(old('lang', $item->lang ?? 'fr') === 'fr')>Français</option>
                <option value="en" @selected(old('lang', $item->lang ?? '') === 'en')>English</option>
            </select>
            @error('lang') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="category_id">Catégorie</label>
            <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                <option value="">— Aucune —</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected((string) old('category_id', $item->category_id ?? '') === (string) $category->id)>
                        {{ $category->title }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3 form-check form-switch">
            <input type="hidden" name="is_published" value="0">
            <input class="form-check-input" type="checkbox" role="switch" id="is_published" name="is_published" value="1"
                   @checked(old('is_published', $item->is_published ?? false))>
            <label class="form-check-label" for="is_published">Publier sur le site</label>
        </div>

        <div class="mb-3">
            <label class="form-label" for="cover">Image de couverture</label>
            @if ($item && $item->getFirstMedia('actu_cover'))
                <div class="mb-2">
                    <img src="{{ $item->getCoverFullUrl() }}" alt="" class="cover-preview">
                </div>
            @endif
            <input type="file" name="cover" id="cover" class="form-control @error('cover') is-invalid @enderror" accept="image/*">
            @error('cover') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>
</div>
