<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Validator;

class UserController extends Controller
{
      public function __construct() {

          $this->middleware('auth');

      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users  = User::all();

        return view('admin/user/index',compact('users'));
    }


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
        $user = User::findOrFail($id);

        return $user;
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
     $this->validate($request, [
        'name' => 'required|max:255',
          'password'=>'required|between:6,12|confirmed|regex:/^[A-Za-z0-9@!#\$%\^&\*]+$/',
          'status' => 'required',
      ]);

      $user = User::findOrFail($request->id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->status = $request->status;
      // Change the password
      if ($request->has('password')) {
        $user->password = bcrypt($request->input('password'));
      }

      $user->save();

      $notification = array(
	             'message' => 'User Updated!',
	             'alert-type' => 'success'
      );
      return back()->with($notification);
    }

    public function updaterole(Request $request)
    {
      $this->validate($request, [
          'status' => 'required',
      ]);

      $user = User::findOrFail($request->id);
      $user->status = $request->status;
      $user->save();

      $notification = array(
	             'message' => 'Role Updated!',
	             'alert-type' => 'success'
      );

      return back()->with($notification);

    }

    public function editpassword(Request $request, $id)
    {
        $user = User::where('id',$id)->first();
        if (Auth::user()->id == $user->id || $request->user()->is_admin()) {
          return view('admin/user/change-password')->with('user',$user);
        }
        $notification = array(
  	             'message' => 'Wrong Access!',
  	             'alert-type' => 'error'
        );
        return back()->with($notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updatepassword(Request $request)
    {
        $this->validate($request, [
            'old' => 'required',
            'password'=>'required|between:6,12|confirmed|regex:/^[A-Za-z0-9@!#\$%\^&\*]+$/',
        ]);

        $user = User::findOrFail($request->id);
        $hashedPassword = $user->password;

        if (!Hash::check($request->old, $hashedPassword)) {

          $notification = array(
    	             'message' => 'Password Lama Salah!',
    	             'alert-type' => 'error'
          );
          return back()->with($notification);

        } else {
                      //Change the password
                      $user->fill([
                          'password' => Hash::make($request->password),
                      ])->save();

                      $notification = array(
                	             'message' => 'Password Successfully Change!',
                	             'alert-type' => 'success'
                      );
                      return redirect('admin/')->with($notification);
        }

        return redirect('admin/')->with($notification);

    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        User::destroy($id);
        
        $notification = array(
            'message' => 'Data User telah berhasil di Hapus!',
            'alert-type' => 'warning'
         );

        return back()->with($notification);
    }
}
