@extends('admin.master')


@section('title')
    Data Rapat
@endsection


@section('content')
        
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35"><i class="zmdi zmdi-accounts-list-alt"></i> DATA KARYAWAN</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                
            </div>
            <div class="table-data__tool-right">
                
                <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#add">
                    <i class="zmdi zmdi-plus"></i>Tambah Data Karyawan</button>
            </div>
        </div>
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employee as $value)
                    <tr class="tr-shadow">
                       
                        <td>{{$value->id_karyawan}}</td>
                        <td class="">
                            <span class="block-email">{{$value->nama_karyawan}}</span>
                        </td>
                        <td class="desc">{{$value->email}}</td>
                        <td>{{$value->alamat}}</td>
                        <td>
                            <div class="table-data-feature">
                            <button class="item" data-toggle="modal" data-target="#show" title="Show" data-nama="{{$value->nama_karyawan}}" data-empemail="{{$value->email}}" data-emalamat="{{$value->alamat}}" data-empid="{{$value->id_karyawan}}">
                                    <i class="zmdi zmdi-eye"></i>
                                </button>
                            <button class="item" data-toggle="modal" data-target="#edit" title="Edit" data-nama="{{$value->nama_karyawan}}" data-empemail="{{$value->email}}" data-emalamat="{{$value->alamat}}" data-empid="{{$value->id_karyawan}}">
                                    <i class="zmdi zmdi-edit"></i>
                            </button>
                                <form method="post" action="{{ route('employee.destroy', $value->id_karyawan) }}">
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


@include('admin.employee.form')

@section('script') 

 <script type="text/javascript">
    $('#edit').on('show.bs.modal', function (event){
        var button = $(event.relatedTarget)
        var nama_karyawan = button.data('nama')
        var email_karyawan = button.data('empemail')
        var id_karyawan = button.data('empid')
        var alamat_karyawan = button.data('emalamat')
       
       

        var modal = $(this);
    
        modal.find('.modal-body #nama_karyawan').val(nama_karyawan);
        modal.find('.modal-body #email').val(email_karyawan);
        modal.find('.modal-body #id_karyawan').val(id_karyawan);
        modal.find('.modal-body #alamat').val(alamat_karyawan);
    });

    $('#show').on('show.bs.modal', function (event){
        var button = $(event.relatedTarget)
        var nama_karyawan = button.data('nama')
        var email_karyawan = button.data('empemail')
        var id_karyawan = button.data('empid')
        var alamat_karyawan = button.data('emalamat')
       
       

        var modal = $(this);
    
        modal.find('.modal-body #nama_karyawan').text(nama_karyawan);
        modal.find('.modal-body #email').text(email_karyawan);
        modal.find('.modal-body #id_karyawan').val(id_karyawan);
        modal.find('.modal-body #alamat').text(alamat_karyawan);
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

