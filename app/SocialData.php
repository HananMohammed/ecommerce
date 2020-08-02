<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialData extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }
    public function socailIcon(){
        return $this->belongsTo(SocialIcon::class,'icon');
    }
}
