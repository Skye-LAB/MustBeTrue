<?php

namespace App\Http\Controllers;

use App\Employee;
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
  public function admin()
  {
    $menu = Menu::all();
    $employee = Employee::all();
    $user = User::where('position', 'guest')->get();
    return view('admin', compact('menu', 'employee', 'user'));
  }
  public function order(Request $request, Menu $menu)
  {
    $menuPesan =  $menu->where("id", $menu->id)->first();
    $totalharga = ['total' => $menuPesan->harga * $request->qty];
    $request->request->add($menuPesan->toArray());
    $request->request->add($totalharga);
    $pesanan = $request->all();
    return view('payment', compact('pesanan'));
  }
  public function payment($id)
  {
  }
  public function create(Request $req)
  {
    $req->validate([
      'username' => 'required|string',
      'password' => 'required|string',
      'email' => 'email|required|unique:users'
    ]);
    User::create([
      'username' => $req->username,
      'email' => $req->email,
      'password' => bcrypt($req->password),
      'position' => 'guest'
    ]);
    return redirect()->refresh();
  }
}
