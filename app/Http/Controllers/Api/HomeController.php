<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Ord(Menu $menu)
    {
       $hasil = $menu->where('nama_menu', $menu->nama_menu)->get()->first();
        return $hasil;
    }
}
