<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    public $timestamps = false;

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
