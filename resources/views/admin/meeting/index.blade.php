@extends('admin.master')


@section('title')
    Data Rapat
@endsection


@section('content')
        
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                
            </div>
            <div class="table-data__tool-right">
                
                <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#add">
                    <i class="zmdi zmdi-plus"></i>add item</button>
            </div>
        </div>
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID Rapat</th>
                        <th>Perihal Rapat</th>
                        <th>Tempat Rapat</th>
                        <th>Waktu Rapat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($meeting as $value)
                    <tr class="tr-shadow">
                       
                        <td>{{$value->id_meeting}}</td>
                        <td class="">
                            <span class="block-email">{{$value->perihal}}</span>
                        </td>
                        <td class="desc">{{$value->tempat}}</td>
                        <td>{{$value->waktu}}</td>
                        <td>
                            <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Show">
                                    <i class="zmdi zmdi-eye"></i>
                                </button>
                            <button class="item" data-toggle="modal" data-target="#edit" title="Edit" data-meetid="{{$value->id_meeting}}" data-perihal="{{$value->perihal}}" data-tempat="{{$value->tempat}}">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete"  onclick="deleteData('. $meeting->id_meeting .')">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
   
@endsection


@include('admin.meeting.form')

@section('script')    

 <script type="text/javascript">
    $('#edit').on('show.bs.modal', function (event){
        var button = $(event.relatedTarget)
        var perihal = button.data('perihal')
        var tempat = button.data('tempat')
        var id_meeting = button.data('meetid')
        console.log(perihal);

        var modal = $(this);
        
        modal.find('.modal-body #id_meeting').val(id_meeting)
        modal.find('.modal-body #perihal').val(perihal);
        modal.find('.modal-body #tempat').val(tempat);
    });
 </script>
@endsection

