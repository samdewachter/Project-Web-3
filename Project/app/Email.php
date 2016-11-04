<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public function User(){
        return $this->belongsTo('App\User');
    }
}
