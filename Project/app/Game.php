<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [
        'name', 'console', 'genre', 'userId'
    ];

    public function User(){
        return $this->belongsTo('App\User');
    }

}
