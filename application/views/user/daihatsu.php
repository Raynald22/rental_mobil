<div class="site-section bg-light" id="about-section">
    <div class="container-fluid">
        <div class="row text-center mt-3">
            <div class="col-12 text-center">
                <h1 class="h3 mb-0 text-gray-800">Daihatsu</h1>
                <?php echo anchor('user/kategori/honda', '<div class="btn btn-sm btn-primary">Honda</div>') ?>
                <?php echo anchor('user/kategori/nissan', '<div class="btn btn-sm btn-primary">Nissan</div>') ?>
                <?php echo anchor('user/kategori/suzuki', '<div class="btn btn-sm btn-primary">Suzuki</div>') ?>
                <?php echo anchor('user/kategori/daihatsu', '<div class="btn btn-sm btn-primary">Daihatsu</div>') ?>
            </div>

            <?php foreach ($daihatsu as $dht) : ?>

                <div class="card ml-3 mb-3" style="width: 10rem height: 10rem;">
                    <img src="<?php echo base_url() . 'assets/uploads/' . $dht->gambar  ?>" alt="<?= $dht->id_mobil ?>">
                    <div class="card-body mb-3 mr-3 mx-3">
                        <h5 class="card-title mb-1"><?= $dht->nama ?></h5>
                        <small><?= $dht->kategori ?></small><br>
                        <span class="badge badge-pill badge-success mb-3">Rp.<?= number_format($dht->harga), 0, ',', '.'  ?></span>
                        <?php echo anchor('dashboard/tambah_ke_keranjang/' . $dht->id_mobil, '<div class="btn btn-sm btn-primary">Sewa</div>') ?>
                        <?php echo anchor('dashboard/detail/' . $dht->id_mobil, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>