<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function Service()
    {
        return $this->belongsTo('App\Service', 'service_id', 'id');
    }
}
