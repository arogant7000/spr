
<!-- MODAL EDIT -->
    <!-- modal large -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Edit Data User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            
            
                <form method="post" action="{{ route('user.update', 'update') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }} {{ method_field('PATCH') }}
                 
                    
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">

                        <div class="form-group">
                                <label for="name" class=" form-control-label">Nama</label>
                                <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                                <label for="email" class=" form-control-label">E-Mail</label>
                                <input type="email" name="email" id="email" placeholder="Masukkan E-Mail" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input class="au-input au-input--full" type="password" name="password" placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Password Confirm</label>
                            <input class="au-input au-input--full" id="password-confirm" type="password" name="password_confirmation" placeholder="Password">

                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="" name="status">
                                <option value="operator">Operator</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                    </div>
               
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update Data User</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- end modal large -->

    <!-- MODAL ROLE -->
    <!-- modal large -->
<div class="modal fade" id="role" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Edit Role User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            
            
                <form method="post" action="{{ url('/admin/user/updaterole')}}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }} {{ method_field('POST') }}
                 
                    
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">

                        <div class="form-group">
                                <label for="name" class=" form-control-label">Nama</label>
                                <input type="text" name="name" id="name" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Status</label>
                            <select class="" name="status">
                                <option value="operator">Operator</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                    </div>
               
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update Role</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- end modal large -->


    