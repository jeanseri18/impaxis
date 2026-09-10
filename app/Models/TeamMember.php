<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class TeamMember extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'role',
        'lang',
        'linkedin',
        'twitter',
        'facebook',
        'experience',
        'bio',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatarTeam')
            ->singleFile();
    }

    public function getAvatarFullUrl(): string
    {
        $media = $this->getFirstMedia('avatarTeam');

        if (is_null($media)) {
            return asset('assets/image/equipes/default.jpeg');
        }

        // Lien direct public (storage/...)
        $relative = 'storage/' . $media->id . '/' . $media->file_name;
        if (is_file(public_path($relative))) {
            return asset($relative);
        }

        // Fallback sur les images déjà présentes dans public/assets
        $fallback = 'assets/image/equipes/' . $media->file_name;
        if (is_file(public_path($fallback))) {
            return asset($fallback);
        }

        return asset($relative);
    }
}
