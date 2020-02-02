<div class="site-section bg-light" id="about-section">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="col-12 text-center">
                    <h1 class="h3 mb-0 text-gray-800">Honda</h1>
                    <?php echo anchor('user/kategori/honda', '<div class="btn btn-sm btn-primary">Honda</div>') ?>
                    <?php echo anchor('user/kategori/nissan', '<div class="btn btn-sm btn-primary">Nissan</div>') ?>
                    <?php echo anchor('user/kategori/suzuki', '<div class="btn btn-sm btn-primary">Suzuki</div>') ?>
                    <?php echo anchor('user/kategori/daihatsu', '<div class="btn btn-sm btn-primary">Daihatsu</div>') ?>
                </div>
                <div class="row text-center mt-3">

                    <?php foreach ($honda as $hnd) : ?>

                        <div class="card ml-3 mb-3" style="width: 10rem height: 10rem;">
                            <img src="<?php echo base_url() . 'assets/uploads/' . $hnd->gambar  ?>" alt="<?= $hnd->id_mobil ?>">
                            <div class="card-body center">
                                <h5 class="card-title mb-1"><?= $hnd->nama ?></h5>
                                <small><?= $hnd->kategori ?></small><br>
                                <span class="badge badge-pill badge-success mb-3">Rp.<?= number_format($hnd->harga), 0, ',', '.'  ?></span>
                                <?php echo anchor('dashboard/tambah_ke_keranjang/' . $hnd->id_mobil, '<div class="btn btn-sm btn-primary">Sewa</div>') ?>
                                <?php echo anchor('dashboard/detail/' . $hnd->id_mobil, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>