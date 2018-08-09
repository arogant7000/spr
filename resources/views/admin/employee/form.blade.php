
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
            
            
                <form method="post" action="{{ route('employee.store') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                     {{ csrf_field() }} {{ method_field('POST') }}
                    
                    <div class="modal-body">
                            <input type="hidden" id="id_karyawan" name="id_karyawan">

                            <div class="form-group">
                                    <label for="nama_karyawan" class=" form-control-label">Nama Karyawan</label>
                                    <input type="text" name="nama_karyawan" id="nama_karyawan" placeholder="Masukkan nama karyawan" class="form-control">
                            </div>

                            <div class="form-group">
                                    <label for="email" class=" form-control-label">E-Mail</label>
                                    <input type="email" name="email" id="email" placeholder="Masukkan E-Mail" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="alamat" class=" form-control-label">Alamat</label>
                                <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat Karyawan" class="form-control">
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
            
            
                <form method="post" action="{{ route('employee.update', 'test') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                     {{ csrf_field() }} {{ method_field('PATCH') }}
                    
                    <div class="modal-body">
                        <input type="hidden" id="id_karyawan" name="id_karyawan">

                        <div class="form-group">
                                <label for="nama_karyawan" class=" form-control-label">Nama Karyawan</label>
                                <input type="text" name="nama_karyawan" id="nama_karyawan" placeholder="Masukkan nama karyawan" class="form-control">
                        </div>

                        <div class="form-group">
                                <label for="email" class=" form-control-label">E-Mail</label>
                                <input type="email" name="email" id="email" placeholder="Masukkan E-Mail" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="alamat" class=" form-control-label">Alamat</label>
                            <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat Karyawan" class="form-control">
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