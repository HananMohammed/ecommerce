<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
   protected $fillable = [
       'about_ar' ,
       'about_en' ,
   ];
}
