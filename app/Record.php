<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
