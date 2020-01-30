<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartproduct extends Model
{
    protected $fillable = [
			'UserID','cartID','productID','priceproduct','quantity'
	];
}
