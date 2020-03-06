<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Employee;
use Illuminate\Http\Request;
use App\User;
use App\Menu;
use App\Order;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

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

  //For Admin CRUD
  public function admin()
  {
    $menu = Menu::all();
    $employee = Employee::all();
    $user = User::where('position', 'guest')->get();
    return view('admin', compact('menu', 'employee', 'user'));
  }

  // public function order(Request $request, Menu $menu)
  // {
  //   $request->validate([
  //     'qty' => 'required|numeric'
  //   ]);
  //   $menuPesan =  $menu->where("id", $menu->id)->first();
  //   $subTot = ['total' => $menuPesan->harga * $request->qty];
  //   $request->request->add($menuPesan->toArray());
  //   $request->request->add($subTot);
  //   $pesanan = $request->all();
  //   return
  //   view('payment', compact('pesanan'));
  // }

  public function getAjax($m)
  {
    $order = Detail::where('order_id', '=', $m)->get();
    // $a = $order->join()
    return response()->json($order);
  }
  public function ajaxPost(Menu $menu)
  {
    $pesanan = $menu->findOrFail($menu->id);
    $order = Order::where('order_id', 'like', '%' . auth()->user()->id)->get()->first();
    if ($order) {
      Detail::create([
        'menu_id' => $pesanan->id,
        'order_id' => $order->order_id,
        'qty' => 1,
        'price' => $pesanan->harga
      ]);
    } else {
      Order::create([
        'order_id' => date('Ym') . auth()->user()->id,
        'user_id' => auth()->user()->id
      ]);
      Detail::create([
        'menu_id' => $pesanan->id,
        'order_id' => $order->order_id,
        'qty' => 1,
        'price' => $pesanan->harga
      ]);
    }
    return response()->json($pesanan);
  }
  public function showCart(Order $order)
  {
    $pesanan = Detail::all();
    return view('cart', compact('pesanan'));
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
    FacadesAlert::alert('Berhasil', 'Akun Telah Dibuat');
    return redirect()->refresh();
  }
}
