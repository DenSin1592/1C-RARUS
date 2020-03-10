<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    public $timestamps = false;

    public function phone()
    {
        return $this->belongsTo(Phone::class);
    }
}
