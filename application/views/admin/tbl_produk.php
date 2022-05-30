<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-fm"></i>Tambah Produk</button>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>NAMA PRODUK</th>
        <th>DESKRIPSI</th>
        <th>DESKRIPSI LENGKAP</th>
        <th>HARGA</th>
        <th>STOK</th>
        <th>GAMBAR</th>
        <th>KATEGORI</th>
        <th colspan="3">AKSI</th>
    </tr>
    <?php
    $no=1;
    foreach($produk as $row) : ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $row->nama_produk ?></td>
        <td><?php echo $row->deskripsi?></td>
        <td><?php echo $row->deskripsi_lengkap?></td>
        <td><?php echo $row->harga?></td>
        <td><?php echo $row->stok?></td>
        <td><?php echo $row->kategori?></td>
        <td><?php echo $row->gambar?></td>

        <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
        <td><?php echo anchor('admin/dashboard/edit/'.$row->id_produk,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
        <td><?php echo anchor('admin/dashboard/hapus/'.$row->id_produk,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
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
        <form action="<?php echo base_url(). 'admin/dashboard/tambah_aksi';?>" method="post" enctype="multipart/form-data">
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