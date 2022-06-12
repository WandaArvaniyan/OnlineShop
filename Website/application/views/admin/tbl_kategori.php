<div class="container-fluid">
  <br>
  <a class="nav-link" href="<?php echo base_url()?>crud/tambah_kategori/">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal"><i class="fa-solid fa-plus"></i> Tambah Kategori</button></a>

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
        <td><?php echo anchor('admin/tbl_kategori/edit/'.$ktg->id,'<div class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></div>')?></td>
        <td><?php echo anchor('admin/tbl_kategori/hapus/'.$ktg->id,'<div class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></div>')?></td>
    </tr>
    
    <?php endforeach; ?>
</table>
</div>
