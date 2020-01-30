<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'name', 'price', 'color', 'image', 'status', 'type', 'text', 'category_id'
    ];

    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo('App\category', 'category_id', 'id');
    }
    public function Color()
    {
        return $this->belongsTo('App\color', 'color', 'id');
    }
    public function Status()
    {
        return $this->belongsTo('App\status', 'status', 'id');
    }
    public function Type()
    {
        return $this->belongsTo('App\cartype', 'type', 'id');
    }
    public function User()
    {
        return $this->belongsTo('App\user', 'user_id', 'id');
    }
}
