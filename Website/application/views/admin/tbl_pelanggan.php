<div class="container-fluid">
    <br>
    <a class="nav-link" href="<?php echo base_url()?>crud/tambah_pelanggan/">
      <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pelanggan"><i class="fa-solid fa-plus"></i> Tambah Pelanggan</button>
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

      
  </div>
</div>