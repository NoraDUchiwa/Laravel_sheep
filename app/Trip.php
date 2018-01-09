<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    function user(){
        return $this->belongsTo(User::class);
    }
}
