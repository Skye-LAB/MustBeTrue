<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_id', 'user_id'];

    public function Detail()
    {
        return $this->hasOne('App\Detail');
    }
}
