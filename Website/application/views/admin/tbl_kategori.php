<div class="container-fluid">
  <br>
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-fm"></i>Tambah Kategori</button>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>NAMA KATEGORI</th>
        <th colspan="3">AKSI</th>
    </tr>
    <?php
    $no=1;
    foreach($kategori as $ktg) : ?>
    
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $ktg->nama_kategori ?></td>
        <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
        <td><?php echo anchor('admin/tbl_kategori/edit/'.$ktg->id,'<div class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></div>')?></td>
        <td><?php echo anchor('admin/tbl_kategori/hapus/'.$ktg->id,'<div class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></div>')?></td>
    </tr>
    
    <?php endforeach; ?>
</table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Form Input</h5>
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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>