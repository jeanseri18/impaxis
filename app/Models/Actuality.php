<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Actuality extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'lang',
        'is_published',
        'published_at',
        'user_id',
        'category_id',
        'created_by',
        'updated_by',
        'deleted_by',
        'is_deleted',
        'deleted_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'is_deleted' => 'boolean',
        'published_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('actu_cover')
            ->singleFile();
    }

    public function getCoverFullUrl(): string
    {
        $media = $this->getFirstMedia('actu_cover');

        if (is_null($media)) {
            return asset('/assets/image/cover_actu.jpg');
        }

        return $media->getFullUrl();
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function scopeNotDeleted($query)
    {
        return $query->where('is_deleted', false);
    }
}
