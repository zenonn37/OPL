<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $guarded = [];

    public function games()
    {
        return $this->hasMany(Game::class);
    }
    public function picks()
    {
        return $this->hasMany(Pick::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}
