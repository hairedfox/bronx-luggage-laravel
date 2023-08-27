<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable =  [
        'orderable_id',
        'orderable_type',
        'total_price',
        'status'
    ];

    public function orderable()
    {
        return $this->morphTo();
    }

    public function orderDetails(): HasMany
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function nextState(): string
    {
        return match ($this->status) {
            'paid' => 'processing',
            'processing' => 'shipping',
            'shipping' => 'done'
        };
    }

    public function isDone(): bool
    {
        return $this->status == 'done';
    }
}
