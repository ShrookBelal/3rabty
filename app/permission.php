<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
     protected $fillable = [
        'name','display_name','description' 
    ];
}
