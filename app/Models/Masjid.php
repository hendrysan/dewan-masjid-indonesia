<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Masjid extends Model
{
    use SoftDeletes;

    public function subdistrict(): BelongsTo
    {
        return $this->belongsTo(Subdistrict::class);
    }

    public function vilage(): BelongsTo
    {
        return $this->belongsTo(Vilage::class);
    }
}
