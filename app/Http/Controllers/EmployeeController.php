<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function cashierForm()
    {
        $order = Order::all();
        return view('cashier', compact('order'));
    }
    public function payment(Request $request)
  {
    return $request->all();
  }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_employee' => 'required|string',
            'password' => 'required|string',
            'email' => 'email|required|unique:employees'
        ]);
        Employee::create([
            'nama_employee' => $request->nama_employee,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'position' => $request->position
        ]);
        User::create([
            'username' => $request->nama_employee,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'position' => $request->position
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('editEmployee', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->where('id', $employee->id)->update([
            'nama_employee' => $request->nama_employee,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'position' => $request->position
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->destroy($employee->id);
        return redirect()->back();
    }
}
