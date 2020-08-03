<?php

namespace App\model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{

    protected $fillable = ['mail' ,'created_by'];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
