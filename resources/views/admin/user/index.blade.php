@extends('admin.master')

@section('title')
 Data User
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
            <a href="/register">
              <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                  <i class="zmdi zmdi-plus"></i>Tambah User</button>
            </a>
          </div>
      </div>
      <div class="table-responsive m-b-40">
          <table class="table table-borderless table-data3">
              <thead>
                  <tr>
                      <th>ID User</th>
                      <th>Nama User</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($users as $value)
                  <tr class="tr-shadow">
                     
                      <td>{{$value->id}}</td>
                      <td class="">
                          <span class="block-email">{{$value->name}}</span>
                      </td>
                      <td class="desc">{{$value->email}}</td>
                      <td>{{$value->status}}</td>
                      <td>
                          <div class="table-data-feature">
                          <button class="item" data-toggle="modal">
                                  <i class="zmdi zmdi-eye"></i>
                              </button>
                              
                            <button class="item" data-toggle="modal" data-target="#edit" data-userid="{{$value->id}}" data-nameuser="{{$value->name}}" data-useremail="{{$value->email}}" data-userrole="{{$value->status}}">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                            <button class="item" data-toggle="modal" data-target="#role" data-userid="{{$value->id}}" data-nameuser="{{$value->name}}" data-userrole="{{$value->status}}">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                              <form method="post" action="{{ route('user.destroy', $value->id) }}">
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


@include('admin.user.form')

@section('script') 
<script type="text/javascript">
    $('#edit').on('show.bs.modal', function (event){
        var button = $(event.relatedTarget)
        var id = button.data('userid')
        var name = button.data('nameuser')
        var email = button.data('useremail')
        var status = button.data('userrole')
       

        var modal = $(this);
        
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #name').val(name)
        modal.find('.modal-body #email').val(email)
        modal.find('modal-body #status').val(status)
    });

    $('#role').on('show.bs.modal', function (event){
        var button = $(event.relatedTarget)
        var id = button.data('userid')
        var name = button.data('nameuser')
        var status = button.data('userrole')
       

        var modal = $(this);
        
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #name').val(name)
        modal.find('modal-body #status').val(status)
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

