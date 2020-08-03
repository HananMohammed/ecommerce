<?php

namespace App\model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public function user(){
        return $this->belongsTo(User::class ,'created_by');
    }
}
