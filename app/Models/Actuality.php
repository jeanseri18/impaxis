<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Actuality extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'category_id',
        'lang',
        'created_by',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('actu_cover')
            ->singleFile();
    }

    public function getCoverFullUrl()
    {
        if (is_null($this->getFirstMedia('avatar'))) {
            return asset('/assets/image/cover_actu.jpg');
        }

        return $this->getFirstMedia('actu_cover')->getFullUrl();
    }
}
