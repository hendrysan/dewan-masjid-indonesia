<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subdistrict extends Model
{
    use SoftDeletes;

    public function vilages(): HasMany
    {
        return $this->hasMany(Vilage::class);
    }
}
