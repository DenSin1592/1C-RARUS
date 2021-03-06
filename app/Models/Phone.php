<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function calls()
    {
        return $this->hasMany(Call::class);
    }
}
