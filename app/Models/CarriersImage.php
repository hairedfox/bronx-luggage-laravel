<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarriersImage extends Model
{
    const FILLABLE_ATTRIBUTES = [
      'carrier_id',
      'media_id'
    ];

    protected $table = 'carriers_images';
    protected $fillable = CarriersImage::FILLABLE_ATTRIBUTES;

    public function carrier(): BelongsTo
    {
        return $this->belongsTo(Carrier::class);
    }

    public function media(): BelongsTo
    {
        return $this->belongsTo(Media::class);
    }
}
