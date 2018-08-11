<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $employee  = Employee::all();

               return view('admin/employee/index',compact('employee'));
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
        $input = $request->all();

        Employee::create($input);

        $notification = array(
            'message' => 'Data Karyawan telah berhasil di tambahkan!',
            'alert-type' => 'success'
         );
        
        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $employee = Employee::findOrFail($id);

       return $employee;
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all();
        $employee = Employee::findOrFail($request->id_karyawan);
        
        $employee->update($input);

        $notification = array(
            'message' => 'Data Karyawan telah berhasil di Update!',
            'alert-type' => 'info'
         );
        
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);

        Employee::destroy($id);
        
        $notification = array(
            'message' => 'Data Karyawan telah berhasil di hapus!',
            'alert-type' => 'warning'
         );

        return back()->with($notification);
    }
}
