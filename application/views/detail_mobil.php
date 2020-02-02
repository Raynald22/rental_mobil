<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Mobil</h5>
        <div class="card-body">

            <?php foreach ($mobil as $mbl) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url() . '/uploads/' . $mbl->gambar ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8"></div>
                    <table class="table">
                        <tr>
                            <td>Nama Mobil</td>
                            <td><strong><?= $mbl->nama ?></strong></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><strong><?= $mbl->kategori ?></strong></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><strong><?= $mbl->stok ?></strong></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><strong>
                                    <div class="btn btn-sm btn-success">Rp.<?= number_format($mbl->harga, 0, ',', '.') ?></div>
                                </strong></td>
                        </tr>

                    </table>
                    <?php echo anchor('dashboard/index/', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>

                    <?php echo anchor('dashboard/tambah_ke_keranjang/' . $mbl->id_mobil, '<div class="btn btn-sm btn-primary">Sewa</div>') ?>

                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>