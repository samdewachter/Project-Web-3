<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;

        use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'town', 'console', 'genre',  'password', 'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Games(){
        return $this->hasMany('App\Game');
    }

    public function Reviews(){
        return $this->hasMany('App\Review');
    }

    public function Emails(){
        return $this->hasMany('App\Email');
    }


    public function isAdmin ()
    {
        return (bool) $this->attributes['admin'];
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($user){
            $user->Games()->delete();
        });
    }
}
