<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
     protected $fillable = ['mission_ar' ,
                            'mission_en' ,
                            'vission_ar' ,
                            'vission_en'
                            ];

}
