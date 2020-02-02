<div class="site-section bg-light" id="about-section">

    <div class="container-fluid">

        <div class="row text-center mt-3">
            <div class="col-12 text-center">
                <h1 class="h3 mb-0 text-gray-800">Suzuki</h1>
                <?php echo anchor('user/kategori/honda', '<div class="btn btn-sm btn-primary">Honda</div>') ?>
                <?php echo anchor('user/kategori/nissan', '<div class="btn btn-sm btn-primary">Nissan</div>') ?>
                <?php echo anchor('user/kategori/suzuki', '<div class="btn btn-sm btn-primary">Suzuki</div>') ?>
                <?php echo anchor('user/kategori/daihatsu', '<div class="btn btn-sm btn-primary">Daihatsu</div>') ?>
            </div>

            <?php foreach ($suzuki as $szk) : ?>

                <div class="card ml-3 mb-3" style="width: 10rem height: 10rem;">
                    <img src="<?php echo base_url() . 'assets/uploads/' . $szk->gambar  ?>" alt="<?= $szk->id_mobil ?>">
                    <div class="card-body mb-3 mr-3 mx-3">
                        <h5 class="card-title mb-1"><?= $szk->nama ?></h5>
                        <small><?= $szk->kategori ?></small><br>
                        <span class="badge badge-pill badge-success mb-3">Rp.<?= number_format($szk->harga), 0, ',', '.'  ?></span>
                        <?php echo anchor('dashboard/tambah_ke_keranjang/' . $szk->id_mobil, '<div class="btn btn-sm btn-primary">Sewa</div>') ?>
                        <?php echo anchor('dashboard/detail/' . $szk->id_mobil, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>