<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Notifications\NewMeetings;
use Illuminate\Http\Request;
use App\Meeting;
use App\Employee;
use Mockery\Exception;
use Yajra\DataTables\DataTables;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $meeting  = Meeting::all();

               return view('admin/meeting/index',compact('meeting'));
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
        $date = str_replace("-", "", $input['waktu']);
        $input['waktu'] = Carbon::parse($date)->format('Y-m-d H:i:s');
        $request->replace($input);

        Meeting::create($input);

        $karyawan = Employee::all();

        $perihal = $request->get('perihal');
        $tempat = $request->get('tempat');

        foreach($karyawan as $user){
            $user->notify(new NewMeetings($perihal, $tempat));
        }

        return back();
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
       $meeting = Meeting::findOrFail($id);

       return $meeting;
       
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
        $meeting = Meeting::findOrFail($request->id_meeting);
        $date = str_replace("-", "", $input['waktu']);
        $input['waktu'] = Carbon::parse($date)->format('Y-m-d H:i:s');
        $request->replace($input);
        
    
        $meeting->update($input);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meeting = Meeting::findOrFail($id);

        Meeting::destroy($id);
        
        return back();
    }

}
