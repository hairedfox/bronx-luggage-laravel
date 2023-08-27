<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable =  [ 'name' ];

    public function orderable()
    {
        return $this->morphTo();
    }

    public function orderDetails(): HasMany
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function totalPrice(): float
    {
        return array_reduce($this->orderDetails, fn($sum, $detail) => $sum + $detail->price, 0);
    }
}
