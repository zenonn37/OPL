<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
    public function picks()
    {
        return $this->hasMany(Pick::class);
    }
    public function games()
    {
        return $this->hasMany(Game::class);
    }
    public function leagues()
    {
        return $this->hasMany(League::class);
    }

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
    public function records()
    {
        return $this->hasMany(Record::class);
    }
}
