<div class="site-section bg-light" id="about-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="h3 mb-0 text-gray-800">List Mobil</h1>
                <button type="submit" class="btn btn-sm btn-primary mb-3">Honda</button>
            </div>
            <div class="row text-center mt-3">

                <?php foreach ($mobil as $mbl) : ?>

                    <div class="card ml-3 mb-3" style="center;">
                        <img src="<?php echo base_url() . 'assets/uploads/' . $mbl->gambar  ?>" alt="<?= $mbl->id_mobil ?>">
                        <div class="card-body mb-3 mr-3 mx-3">
                            <h5 class="card-title mb-1"><?= $mbl->nama ?></h5>
                            <small><?= $mbl->kategori ?></small><br>
                            <span class="badge badge-pill badge-success mb-3">Rp.<?= number_format($mbl->harga), 0, ',', '.'  ?></span>
                            <?php echo anchor('dashboard/tambah_ke_keranjang/' . $mbl->id_mobil, '<div class="btn btn-sm btn-primary">Sewa</div>') ?>
                            <?php echo anchor('dashboard/detail/' . $mbl->id_mobil, '<div class="btn btn-sm btn-success">Detail</div>') ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>