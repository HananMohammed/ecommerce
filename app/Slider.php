<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public function user(){
        return $this->belongsTo(User::class ,'created_by');
    }
}
