<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    public  function user(){
        return $this->belongsTo(User::class,'created_by');
    }
}
