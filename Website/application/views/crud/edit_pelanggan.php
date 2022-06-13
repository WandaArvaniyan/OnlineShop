<div class="container-fluid">
<h3><i class= "fas fa-edit"></i>EDIT DATA PELANGGAN</h3>

<?php foreach($pelanggan as $pr): ?>
    

<form method ="post" action="<?php echo base_url() .'admin/tbl_pelanggan/update' ?>">

<div class="for-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" 
    value="<?php echo $pr->nama ?>">
</div>

<div class="for-group">
    <label>Email</label>
    <!-- <input type="hidden" name="id_produk" class="form-control" 
    value="<?php //echo $pr->id?>"> -->
    <input type="text" name="email" class="form-control" 
    value="<?php echo $pr->email ?>">
</div>

<div class="for-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control" 
    value="<?php echo $pr->alamat ?>">
</div>

<div class="for-group">
    <label>No Handphone</label>
    <input type="text" name="telp" class="form-control" 
    value="<?php echo $pr->telp ?>">
</div>

<button type="submit" class="btn btn-primary btn-sm mb-3">Simpan</button>

</form>

<?php endforeach;?>


</div>