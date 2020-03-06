<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['order_id', 'menu_id', 'qty', 'price'];

    public function Menu()
    {
        return $this->belongsTo('App\Menu');
    }
}
