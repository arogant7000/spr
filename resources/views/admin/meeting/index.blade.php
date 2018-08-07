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
                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add item</button>
            </div>
        </div>
        
        
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Perihal</th>
                        <th>Tempat</th>
                        <th>Waktu</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
   
    @include('admin.meeting.form')
@endsection

@section('script')    

 <script type="text/javascript">
      var table = $('#meeting-table').DataTable({
                      processing: true,
                      serverSide: true,
                      ajax: "{{ route('api.meeting') }}",
                      columns: [
                        {data: 'id_meeting', name: 'id_meeting'},
                        {data: 'perihal', name: 'perihal'},
                        {data: 'tempat', name: 'tempat'},
                        {data: 'waktu', name: 'waktu'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                      ]
                    });
    </script>
@endsection

