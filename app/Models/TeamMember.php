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
        'role',
        'experience',
        'bio',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatarTeam')
            ->singleFile();
    }

    public function getAvatarFullUrl() {
        if (is_null($this->getFirstMedia('avatarTeam'))) {
            return asset('/assets/image/equipes/default.jpeg');
        }

        return $this->getFirstMedia('avatarTeam')->getFullUrl();
    }
}