<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800"><?= $title, $users['name']; ?></h1>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/1.jpg') ?>" class="d-block w-100" alt="<?= base_url('assets/img/1.jpg') ?>">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/2.jpg') ?>" class="d-block w-100" alt="<?= base_url('assets/img/2.jpg') ?>">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/3.jpg') ?>" class="d-block w-100" alt="<?= base_url('assets/img/3.jpg') ?>">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row text-center mt-3">

        <?php foreach ($mobil as $mbl) : ?>

            <div class="card ml-3 mb-3" style="width: 10rem height: 10rem;">
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