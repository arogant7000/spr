@extends('admin.master')


@section('title')
    Data Booking Lapangan
@endsection


@section('content')
    <section class="contect-admin">
        <div class="container">


            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Data Booking Lapangan</h2>
                    <hr>
                </div>
            </div>

            <div class="row" style="margin-top:40px;">
                
                <div class="col-sm-12">
                    <div class="row" style="margin-bottom:40px;">
                        <h4>
                        <a onclick="addForm()" class="btn btn-success pull-right">Tambah Booking</a>
                        </h4>
                    </div>
                    <div class="row">
                    <table class="table table-striped table-hover " id="booking-table">
                        <thead>
                            
                            <th>Kode</th>
                            <th>Tanggal</th>
                            <th>Lapangan</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

        
    </section>

   @include('admin.booking.form')
@endsection

@section('script')    
<script type="text/javascript" src="{{ asset('js/timepicki.js')}}"></script>


<script type="text/javascript">
            $('.timepicker').timepicki({
                show_meridian:false,
                min_hour_value:0,
                max_hour_value:23,
                step_size_minutes:15,
                overflow_minutes:true,
                increase_direction:'up',
                disable_keyboard_mobile: true});
</script>


 <script type="text/javascript">
      var table = $('#booking-table').DataTable({
                      processing: true,
                      serverSide: true,
                      ajax: "{{ route('api.booking') }}",
                      columns: [
                        {data: 'id_booking', name: 'id_booking'},
                        {data: 'tanggal', name: 'tanggal'},
                        {data: 'shift.shift_lapangan', name: 'shift.shift_lapangan'},
                        {data: 'shift.jam_mulai', name: 'shift.jam_mulai'},
                        {data: 'shift.jam_selesai', name: 'shift.jam_selesai'},
                        {data: 'shift.harga', name: 'shift.harga'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                      ]
                    });q

      function addForm() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#modal-form').modal('show');
        $('#modal-form form')[0].reset();
        $('.modal-title').text('Add Booking');
      }

      function editForm(id) {
        save_method = 'edit';
        $('input[name=_method]').val('PATCH');
        $('#modal-form form')[0].reset();
        $.ajax({
          url: "{{ url('admin/booking') }}" + '/' + id + "/edit",
          type: "GET",
          dataType: "JSON",
          success: function(data) {
            $('#modal-form').modal('show');
            $('.modal-title').text('Edit Booking');

            $('#id_shift').val(data.id_booking);
          },
          error : function() {
              alert("Nothing Data");
          }
        });
      }

      function deleteData(id){
          var csrf_token = $('meta[name="csrf-token"]').attr('content');
          swal({
              title: 'Anda Yakin menghapus Data Booking ini?',
              text: "Anda tidak dapat membatalkan jika sudah diproses",
              type: 'warning',
              showCancelButton: true,
              cancelButtonColor: '#d33',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Yes, Hapus Booking ini!'
          }).then(function () {
              $.ajax({
                  url : "{{ url('admin/booking') }}" + '/' + id,
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
                    var id = $('#id_shift').val();
                    if (save_method == 'add') url = "{{ url('admin/booking') }}";
                    else url = "{{ url('admin/booking') . '/' }}" + id;

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

