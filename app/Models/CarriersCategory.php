<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarriersCategory extends Model
{
  protected $table = 'brands';
  protected $fillable =  [ 'carrier_id', 'category_id' ];

  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }

  public function carrier(): BelongsTo
  {
    return $this->belongsTo(Carrier::class);
  }
}
