
<!--MODAL ADD -->
<!-- modal large -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Tambah Data Rapat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            
            
                <form method="post" action="{{ route('meeting.store') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                     {{ csrf_field() }} {{ method_field('POST') }}
                    
                    <div class="modal-body">
                            <input type="hidden" id="id_shift" name="id_shift">

                            <div class="form-group">
                                    <label for="perihal" class=" form-control-label">Perihal Rapat</label>
                                    <input type="text" name="perihal" id="perihal" placeholder="Masukkan tema, judul atau perihal Rapat" class="form-control">
                            </div>

                            <div class="form-group">
                                    <label for="tempat" class=" form-control-label">Tempat Rapat</label>
                                    <input type="text" name="tempat" id="tempat" placeholder="Masukkan Lokasi Rapat" class="form-control">
                            </div>
                                    
                            <div class="form-group">
                                <label for="waktu" class=" form-control-label">Waktu Rapat</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" id="waktu" class="form-control floating-label" placeholder="">
                                </div>
                            </div>
                    </div>
               
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- end modal large -->


<!-- MODAL EDIT -->
    <!-- modal large -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Edit Data Rapat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            
            
                <form method="post" action="{{ route('meeting.update', 'test') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                     {{ csrf_field() }} {{ method_field('PATCH') }}
                    
                    <div class="modal-body">
                    <input type="hidden" id="id_meeting" name="id_meeting" value="">

                            <div class="form-group">
                                    <label for="perihal" class=" form-control-label">Perihal Rapat</label>
                                    <input type="text" name="perihal" id="perihal" placeholder="Masukkan tema, judul atau perihal Rapat" class="form-control">
                            </div>

                            <div class="form-group">
                                    <label for="tempat" class=" form-control-label">Tempat Rapat</label>
                                    <input type="text" name="tempat" id="tempat" placeholder="Masukkan Lokasi Rapat" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="waktu" class=" form-control-label">Waktu Rapat</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" id="waktu" class="form-control floating-label" placeholder="Begin Date Time">
                                </div>
                            </div>
                    </div>
               
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- end modal large -->