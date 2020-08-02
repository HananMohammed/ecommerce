<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
