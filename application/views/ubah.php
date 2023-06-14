<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <input type="hidden" name="id_produk" value="<?= $barang['id_produk']; ?>">
                <div class="form-group">
                    <?php if(validation_errors() ) :?>
                    <div class=" alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif;?>
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" id="nama_produk"
                        value="<?= $barang['nama_produk']; ?>">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control" id="harga" value="<?= $barang['harga']; ?>">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" name="kategori" class="form-control" id="kategori"
                        value="<?= $barang['kategori']; ?>">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" name="status" class="form-control" id="status" value="<?= $barang['status']; ?>">
                </div>
                <button type="submit" name="ubah" class="btn btn-primary">Edit Data</button>
            </form>

        </div>
    </div>
</div>