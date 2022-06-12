<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <!-- <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"> -->
        <h5 class="modal-title" id="exampleModalCenterTitle">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/tbl_produk/tambah_aksi';?>" method="post" enctype="multipart/form-data">
            <div class="form=group">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control">

            </div>
            <div class="form=group">
                <label>Deskripsi</label> <br>
                <input type="text" name="deskripsi" class="form-control">

            </div>
            <div class="form=group">
                <label>Deskripsi Lengkap</label> <br>
                <input type="text" name="deskripsi_lengkap" class="form-control">

            </div>
            <div class="form=group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">

            </div>
            <div class="form=group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">

            </div>
            <div class="form=group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                  <option>Atasan</option>
                  <option>Bawahan</option>
                  <option>Outer</option>
                  <option>Gamis</option>
                  <option>Hijab</option>
                  <option>Lain-lain</option>
                </select>
            </div>
            <div class="form=group">
                <label>Gambar Produk</label>
                <input type="file" name="gambar" class="form-control">

            </div>
            
      </div>
      <div class="modal-footer">
        <a class="nav-link" href="<?php echo base_url()?>admin/tbl_produk/"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></a>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>