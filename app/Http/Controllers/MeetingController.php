<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Notifications\NewMeetings;
use App\Notifications\UpdateMeetings;
use Illuminate\Http\Request;
use App\Meeting;
use App\Employee;
use Mockery\Exception;
use Yajra\DataTables\DataTables;
use Session;

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
        //$date = str_replace("-", "", $input['waktu']);
        //$input['waktu'] = Carbon::parse($date)->format('Y-m-d H:i:s');
        //$request->replace($input);

        Meeting::create($input);

        $karyawan = Employee::all();

        $id_meeting = $request->get('id_meeting');
        $perihal = $request->get('perihal');
        $tempat = $request->get('tempat');
        $waktu = $request->get('waktu');

        $waktu1 = Carbon::createFromTimestamp(strtotime($waktu))->formatLocalized('%A, %d %B %Y %H:%I');

        foreach($karyawan as $user){
            $user->notify(new NewMeetings($id_meeting, $perihal, $tempat, $waktu1));
        }

        $notification = array(
            'message' => 'Data Rapat telah berhasil di buat!',
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
        //$date = str_replace("-", "", $input['waktu']);
        //$input['waktu'] = Carbon::parse($date)->format('Y, m, d, H, i, s');
        //$request->replace($input);
        
        $meeting->update($input);

        $karyawan = Employee::all();

        $id_meeting = $request->get('id_meeting');
        $perihal = $request->get('perihal');
        $tempat = $request->get('tempat');
        $waktu = $request->get('waktu');

        $waktu1 = Carbon::createFromTimestamp(strtotime($waktu))->formatLocalized('%A, %d %B %Y %H:%I');

        foreach($karyawan as $user){
            $user->notify(new UpdateMeetings($id_meeting, $perihal, $tempat, $waktu1));
        }

        $notification = array(
            'message' => 'Data Rapat telah berhasil di Update!',
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
        $meeting = Meeting::findOrFail($id);

        Meeting::destroy($id);
        
        $notification = array(
            'message' => 'Data Rapat telah berhasil di Hapus!',
            'alert-type' => 'danger'
         );

        return back()->with($notification);
    }

}
