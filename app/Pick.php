<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Pick extends Model
{


    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function leagues()
    {
        return $this->belongsTo(League::class);
    }
}
