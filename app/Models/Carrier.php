<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    const FILLABLE_ATTRIBUTES = [
        'description',
        'gender',
        'type',
        'brand_id',
        'price',
        'release_year'
    ];

    protected $table = 'carriers';
    protected $fillable = Carrier::FILLABLE_ATTRIBUTES;

}
