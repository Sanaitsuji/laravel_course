<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    
    protected $fillable = ['name'];

    function states()
    {
        return $this->hasMany(State::class);
    }

    function cities()
    {
        return $this->hasManyThrough(City::class, State::class);
    }

}
