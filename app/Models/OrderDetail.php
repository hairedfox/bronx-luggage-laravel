<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    protected $fillable =  [ 'name' ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
