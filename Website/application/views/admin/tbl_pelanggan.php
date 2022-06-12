<div class="container-fluid">
    <br>
    <a class="nav-link" href="<?php echo base_url()?>crud/tambah_produk/">
      <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fa-solid fa-plus"></i> Tambah Produk</button>
    </a>
<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>NAMA PELANGGAN</th>
        <th>EMAIL</th>
        <th>ALAMAT</th>
        <th>NO HANDPHONE</th>
        <th colspan="2">AKSI</th>
    </tr>
    <?php
    $no=1;
    foreach($pelanggan as $row) : ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $row->nama ?></td>
        <td><?php echo $row->email?></td>
        <td><?php echo $row->alamat?></td>
        <td><?php echo $row->telp?></td>

        <!-- <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td> -->
        <td><?php echo anchor('admin/tbl_pelanggan/edit/'.$row->id,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
        <td><?php echo anchor('admin/tbl_pelanggan/hapus/'.$row->id,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
    </tr>
    
    <?php endforeach; ?>
</table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/tbl_produk/tambah_aksi';?>" method="post" enctype="multipart/form-data">
            <div class="form=group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control">

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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>