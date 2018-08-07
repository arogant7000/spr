<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form-shift" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id_shift" name="id_shift">
                    
                    <div class="form-group">
                        <label for="shift_lapangan" class="col-md-3 control-label">Lapangan</label>
                        <div class="col-md-6">
                            <select name="shift_lapangan" id="shift_lapangan">
                                <option value="">Pilih Lapangan</option>
                                <option value="1">Lapangan 1</option>
                                <option value="2">Lapangan 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jam_mulai" class="col-md-3 control-label">Jam Mulai</label>
                        <div class="col-sm-6">
                        <div class="input-group date"  data-date-format="yyyy/mm/dd">
                          <div class="input-group-addon">
                            <i class="glyphicon glyphicon-time"></i>
                          </div>
                          <input type="text"  name="jam_mulai"  id="jam_mulai" class="form-control  timepicker">
                          <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="jam_selesai" class="col-md-3 control-label">Jam Selesai</label>
                      <div class="col-sm-6">
                        <div class="input-group date"  data-date-format="yyyy/mm/dd">
                          <div class="input-group-addon">
                            <i class="glyphicon glyphicon-time"></i>
                          </div>
                          <input type="text"  name="jam_selesai" id="jam_selesai" class="form-control  timepicker">
                          <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="harga" class="col-md-3 control-label">Harga</label>
                      <div class="col-md-6">
                          <input type="text" id="harga" name="harga" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                    
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>

            </form>
        </div>
    </div>
</div>
