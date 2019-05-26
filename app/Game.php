<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Game extends Model
{
    protected $fillable = ['week', 'date', 'games'];

    public function schedules()
    {
        return  $this->hasMany(Schedule::class);
    }
}
