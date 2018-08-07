<!-- modal large -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="form-meeting" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                     {{ csrf_field() }} {{ method_field('POST') }}
                    <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <input type="hidden" id="id_shift" name="id_shift">

                            <div class="form-group">
                                    <label for="perihal" class=" form-control-label">Perihal Rapat</label>
                                    <input type="text" id="perihal" placeholder="Masukkan tema, judul atau perihal Rapat" class="form-control">
                            </div>

                            <div class="form-group">
                                    <label for="tempat" class=" form-control-label">Tempat Rapat</label>
                                    <input type="text" id="tempat" placeholder="Masukkan Lokasi Rapat" class="form-control">
                            </div>

                            <div class="form-group">
                                    <label for="waktu" class=" form-control-label">Waktu Rapat</label>
                                    <input type="text" id="waktu" placeholder="Masukkan Waktu Rapat" class="form-control">
                            </div>


            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Confirm</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- end modal large -->