<div class="container">
    <?php if( $this->session->flashdata('flash') ) :?>
    <div class="ro mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Barang <strong>Berhasil</strong> <?= $this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">Tambah Barang</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Daftar Barang</h2>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No.Produk</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($barang as $brg) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $brg['nama_produk']; ?></td>
                        <td><?= $brg['harga']; ?></td>
                        <td><?= $brg['kategori']; ?></td>
                        <td><?= $brg['status']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>barang/hapus/<?= $brg['id_produk']; ?>"
                                class="badge badge-danger"
                                onclick="return confirm('Yakin Data Ingin Di Hapus');">Hapus</a>
                            <a href="<?= base_url(); ?>barang/ubah/<?= $brg['id_produk']; ?>"
                                class="badge badge-warning">Edit</a>
                        </td>
                    </tr>
                </tbody>
                <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>