@extends('admin.master')


@section('title')
    Data Rapat
@endsection


@section('content')
        
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">DATA RAPAT</h3>
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
                        <td>{{  Carbon\Carbon::createFromTimestamp(strtotime($value->waktu))->formatLocalized('%A, %d %B %Y %H:%I') }}</td>
                        <td>
                            <div class="table-data-feature">
                            <button class="item" data-toggle="modal" data-target="#show" data-meetid="{{$value->id_meeting}}" data-perihal="{{$value->perihal}}" data-tempat="{{$value->tempat}}" data-waktu="{{$value->waktu}}">
                                    <i class="zmdi zmdi-eye"></i>
                                </button>
                            <button class="item" data-toggle="modal" data-target="#edit" data-meetid="{{$value->id_meeting}}" data-perihal="{{$value->perihal}}" data-tempat="{{$value->tempat}}" data-waktu="{{$value->waktu}}">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <form method="post" action="{{ route('meeting.destroy', $value->id_meeting) }}">
                                        {{ method_field('DELETE') }} {{ csrf_field() }}
                                        <button class="item js-submit-confirm" data-toggle="tooltip" type="submit" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                    </form>
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
        var waktu = button.data('waktu')
        var id_meeting = button.data('meetid')
        console.log(perihal);

        var modal = $(this);
        
        modal.find('.modal-body #id_meeting').val(id_meeting)
        modal.find('.modal-body #perihal').val(perihal);
        modal.find('.modal-body #tempat').val(tempat);
        modal.find('.modal-body #waktu1').val(waktu);
    });

    $('#edit').on('show.bs.modal', function (event){
        var button = $(event.relatedTarget)
        var perihal = button.data('perihal')
        var tempat = button.data('tempat')
        var waktu = button.data('waktu')
        var id_meeting = button.data('meetid')
        console.log(perihal);

        var modal = $(this);
        
        modal.find('.modal-body #id_meeting').text(id_meeting)
        modal.find('.modal-body #perihal').text(perihal);
        modal.find('.modal-body #tempat').text(tempat);
        modal.find('.modal-body #waktu1').text(waktu);
    });

 </script>


<script type="text/javascript">
    $(document).ready(function () {
        /*sweetalert confirm*/
        $(document.body).on('click', '.js-submit-confirm', function (event) {
            event.preventDefault();
            var $form = $(this).closest('form');
            var $el = $(this);
            var text = $el.data('confirm-message') ? $el.data('confirm-message') : 'You will not be able to recover this imaginary file!';
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then(function () {
                $form.submit()
            })
        });
    });
</script>

@endsection

