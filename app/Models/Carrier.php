<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carrier extends Model
{
    const TYPES = [
        'luggage',
        'backpack',
        'bag'
    ];
    const FILLABLE_ATTRIBUTES = [
        'name',
        'description',
        'gender',
        'type',
        'brand_id',
        'price',
        'release_year',
        'featured'
    ];

    protected $table = 'carriers';
    protected $fillable = Carrier::FILLABLE_ATTRIBUTES;

    public function carriersImages(): HasMany
    {
        return $this->hasMany(CarriersImage::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function firstImage(): string
    {
        if (empty($this->carriersImages()->get()->toArray()))
        {
            return '';
        }

        return $this->carriersImages[0]->media->path;
    }
}
