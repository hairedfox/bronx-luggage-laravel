<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Suggestion extends Model
{
    use HasFactory;

    protected $table = 'suggestions';
    protected $fillable = ['request', 'suggestable_id', 'suggestable_type'];

    public function suggestable(): MorphTo
    {
        return $this->morphTo();
    }
}
