<div class="container-fluid">
<h3><i class= "fas fa-edit"></i>EDIT DATA PRODUK</h3>

<?php foreach($produk as $pr): ?>
    

<form method ="post" action="<?php echo base_url() .'admin/tbl_produk/update' ?>">

<div class="for-group">
    <label>Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control" 
    value="<?php echo $pr->nama_produk ?>">
</div>

<div class="for-group">
    <label>Deskripsi</label>
    <!-- <input type="hidden" name="id_produk" class="form-control" 
    value="<?php //echo $pr->id?>"> -->
    <input type="text" name="deskripsi" class="form-control" 
    value="<?php echo $pr->deskripsi ?>">
</div>

<div class="for-group">
    <label>Deskripsi Lengkap</label>
    <input type="text" name="deskripsi_lengkap" class="form-control" 
    value="<?php echo $pr->deskripsi_lengkap ?>">
</div>

<div class="for-group">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control" 
    value="<?php echo $pr->harga ?>">
</div>

<div class="for-group">
    <label>Stok</label>
    <input type="text" name="stok" class="form-control" 
    value="<?php echo $pr->stok ?>">
</div>

<div class="for-group">
    <label>Kategori</label>
    <input type="text" name="kategori" class="form-control" 
    value="<?php echo $pr->kategori ?>">
</div>

<button type="submit" class="btn btn-primary btn-sm mb-3">Simpan</button>

</form>

<?php endforeach;?>


</div>