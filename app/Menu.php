<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['nama_menu', 'harga', 'photo'];

    public function getProfile()
    {
        if (!$this->photo) {
            return asset('images/default.jpg');
        }
        return asset('images/' . $this->photo);
    }
}
