<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Guest extends Model
{
  protected $table = 'guests';

  protected $fillable = [
    'first_name',
    'last_name',
    'email',
    'phone_number'
  ];

  public function orders(): MorphMany
  {
    return $this->morphMany(Order::class, 'orderable');
  }

  public function fullname(): string
  {
    return $this->first_name . " " . $this->last_name;
  }
}
