<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Menu;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $menu = Menu::all();
      return view('home', compact('menu'));
    }

    public function create(Request $req) {
      User::create([
        'username' => $req->username,
        'email' => $req->email,
        'password' => bcrypt($req->password),
        'position' => 'guest'
      ]);
      return redirect ('/');
    }
}
