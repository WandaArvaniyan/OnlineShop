<div class="modal fade" id="tambah_pelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <!-- <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"> -->
        <h5 class="modal-title" id="exampleModalCenterTitle">Form Input Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/tbl_pelanggan/tambah_aksi';?>" method="post" enctype="multipart/form-data">
            <div class="form=group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">

            </div>
            <div class="form=group">
                <label>Email</label> <br>
                <input type="text" name="email" class="form-control">

            </div>
            <div class="form=group">
                <label>Alamat</label> <br>
                <input type="text" name="alamat" class="form-control">

            </div>
            <div class="form=group">
                <label>No Handphone</label>
                <input type="text" name="telp" class="form-control">

            </div>            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>