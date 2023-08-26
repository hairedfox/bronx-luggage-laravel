<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Media extends Model
{
    const FILLABLE_ATTRIBUTES = [
        'name',
        'path',
        'size',
        'type',
        'user_id'
    ];

    protected $table = 'carriers';
    protected $fillable = Media::FILLABLE_ATTRIBUTES;

    public function carriersImages(): HasMany
    {
        return $this->hasMany(CarriersImage::class);
    }
}
