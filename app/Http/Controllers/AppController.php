<?php

namespace App\Http\Controllers;
use App\Meeting;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {
      return view('admin/index');
    }

    public function index()
    {

        $meeting =  Meeting::orderBy('updated_at','DESC')->paginate(3);
        return view('home', compact('meeting'));
    }
}
