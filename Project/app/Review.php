<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $fillable = [
        'user_id', 'reviewUserId', 'text'
    ];

    public function User(){
        return $this->belongsTo('App\User');
    }
}
