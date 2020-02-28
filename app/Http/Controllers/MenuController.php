<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Employee;
use App\User;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        $employee = Employee::all();
        $user = User::where('position', 'guest')->get();
        return view('admin', compact('menu', 'employee', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {
            $request->file('photo')->move('/images', $request->file('photo')->getClientOriginalName());
        }
        return $request->all();
        Menu::create([
            'nama_menu' => $request->nama_menu,
            'harga' => $request->harga,
            'photo' => $request->file('photo')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        // if ($request->hasFile('photo')) {
        //     $image = $request->file('photo')->getClientOriginalName();
        // } else {
        //     $image = 'default.jpg';
        // }

        // $request->validate([
        //     'nama_menu' => 'required',
        //     'harga' => 'required',
        //     'photo' => 'required|mimes:jpg,jpeg,gif,png,svg|size:3072'
        // ]);
        // menu::where('menu_id', $menu->menu_id)
        //     ->update([
        //         'nama_menu' => $request->name,
        //         'harga' => $request->price,
        //         'photo' => $image
        //     ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        // return 'a';
        // dd($menu->id);
        $menu->destroy($menu->id);
        return redirect()->back();
    }
}
