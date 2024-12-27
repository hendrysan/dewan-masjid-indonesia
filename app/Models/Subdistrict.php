<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subdistrict extends Model
{
    use SoftDeletes;

    public function vilages()
    {
        return $this->belongsTo(Vilage::class, 'subdistrict_id', 'id');
    }
}
