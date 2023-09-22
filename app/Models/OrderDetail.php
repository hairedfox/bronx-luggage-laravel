<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    protected $fillable =  [ 'order_id', 'carrier_id', 'price', 'quantity' ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
