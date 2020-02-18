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

  public function create(Request $request)
  {
    $request->validate([
      'username' => 'required',
      'email' => 'required|email',
      'password' => 'required',
    ]);
    User::create([
      'username' => $request->username,
      'email' => $request->email,
      'password' => bcrypt($request->password),
      'hp' => $request->hp,
      'position' => 'guest'
    ]);
    return redirect()->back();
  }
}
