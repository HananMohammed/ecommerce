<?php

namespace App\model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{

    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }

}
