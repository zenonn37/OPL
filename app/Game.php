<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Game extends Model
{
    protected $fillable = ['week', 'date', 'games', 'league_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function schedules()
    {
        return  $this->hasMany(Schedule::class);
    }
}
