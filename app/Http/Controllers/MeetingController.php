<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meeting;
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
               return view('admin/meeting/index');
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

        Meeting::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Data Shift Baru di Buat'
        ]);
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
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $meeting = Meeting::findOrFail($id);
        $meeting->update($input);
        return response()->json([
            'success' => true,
            'message' => 'Update Rapat Berhasil'
        ]);
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

        return response()->json([
            'success' => true,
            'message' => 'Data Shift di Hapus'
        ]);
    }

    public function apiMeetings()
    {
        $meeting = Meeting::all();

        return Datatables::of($meeting)
            ->addColumn('action', function($meeting){
                return 
                    ' <a href="" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Show</a> ' .
                    ' <a class="btn btn-primary btn-xs" onclick="editForm('. $meeting->id_meeting .')"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                    ' <a class="btn btn-danger btn-xs" onclick="deleteData('. $meeting->id_meeting .')"><i class="glyphicon glyphicon-trash"></i> Delete</a> ';
            })
            ->editColumn('perihal', '{{$perihal}}')
            ->editColumn('tempat', '{{$tempat}}')
            ->editColumn('waktu', 'Rp. {{$waktu}}')
            ->make(true);
    }
}
