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
                
                <button class="au-btn au-btn-icon au-btn--green au-btn--small" onclick="addForm()">
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
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
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
    function addForm() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#modal-form').modal('show');
        $('#modal-form form')[0].reset();
        $('.modal-title').text('Add Meeting');
      }   


      function deleteData(id){
          var csrf_token = $('meta[name="csrf-token"]').attr('content');
          swal({
              title: 'Anda Yakin menghapus Data Rapat ini?',
              text: "Anda tidak dapat membatalkan jika sudah diproses",
              type: 'warning',
              showCancelButton: true,
              cancelButtonColor: '#d33',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Yes, Hapus Data Rapat ini!'
          }).then(function () {
              $.ajax({
                  url : "{{ url('admin/meeting') }}" + '/' + id,
                  type : "POST",
                  data : {'_method' : 'DELETE', '_token' : csrf_token},
                  success : function(data) {
                      table.ajax.reload();
                      swal({
                          title: 'Success!',
                          text: data.message,
                          type: 'success',
                          timer: '1500'
                      })
                  },
                  error : function () {
                      swal({
                          title: 'Oops...',
                          text: data.message,
                          type: 'error',
                          timer: '1500'
                      })
                  }
              });
          });
        }

      $(function(){
            $('#modal-form form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id_meeting').val();
                    if (save_method == 'add') url = "{{ url('admin/meeting') }}";
                    else url = "{{ url('admin/meeting') . '/' }}" + id;

                    $.ajax({
                        url : url,
                        type : "POST",
//                        data : $('#modal-form form').serialize(),
                        data: new FormData($("#modal-form form")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            swal({
                                title: 'Success!',
                                text: data.message,
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error : function(data){
                            swal({
                                title: 'Oops...',
                                text: data.message,
                                type: 'error',
                                timer: '1500'
                            })
                        }
                    });
                    return false;
                }
            });
        });  
 </script>
@endsection

