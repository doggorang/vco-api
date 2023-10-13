<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredients extends Model
{
    public $timestamps = false;

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Categories::class);
    }
}