<div class="container-fluid">
    <h3><i class= "fas fa-edit"></i>EDIT KATEGORI</h3>

    <?php foreach($kategori as $ktg): ?>
        <form method ="post" action="<?php echo base_url() .'admin/tbl_kategori/update' ?>">

            <div class="for-group">
                <label>Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" 
                value="<?php echo $ktg->nama_kategori ?>">
            </div>

            <div class="for-group">
                <input type="hidden" name="id" class="form-control" 
                value="<?php echo $ktg->id?>"><br>
            </div>

            <button type="submit" class="btn btn-primary btn-sm mb-3">Simpan</button>

        </form>

    <?php endforeach;?>
</div>