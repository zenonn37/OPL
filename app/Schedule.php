<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'home', 'away', 'game',
        'favorite', 'spread',
        'location', 'time'
    ];


    public function games()
    {
        return $this->belongsTo(Game::class);
    }
}
