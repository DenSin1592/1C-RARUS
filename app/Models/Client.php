<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function calls()
    {
        return $this->hasManyThrough(Call::class, Phone::class);
    }
}
