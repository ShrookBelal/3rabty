<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_image extends Model
{
     protected $fillable = [
       'image','product_id'
    ];

     protected $table = 'product_images';

    public function product(){
	return $this->belongsTo('App\product','product_id','id');
}

}
