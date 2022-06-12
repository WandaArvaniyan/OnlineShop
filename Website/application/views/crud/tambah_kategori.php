<div class="container-fluid">
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <!-- <div class="modal-dialog modal-dialog-centered" role="document"> -->
      <!-- <div class="modal-content"> -->
      <!-- <div class="modal-header"> -->
        <h5>Form Input</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/tbl_kategori/tambah_aksi';?>" method="post" enctype="multipart/form-data">
            <div class="form=group">
                <label>Kategori</label>
                <input type="text" name="nama_kategori" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
      <a class="nav-link" href="<?php echo base_url()?>admin/tbl_kategori/"><button type="button" class="btn btn-danger">Close</button></a>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>