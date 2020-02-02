<div class="site-section bg-light" id="about-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h4>Keranjang Sewa</h4>

                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Nama Mobil</th>
                        <th>Hari</th>
                        <th>Harga</th>
                        <th>Sub-Total</th>
                    </tr>

                    <?php
                    $no = 1;
                    foreach ($this->cart->contents() as $items) : ?>

                        <tr>
                            <td align="center"><?php echo $no++ ?></td>
                            <td align="center"><?php echo $items['name'] ?></td>
                            <td align="center"><?php echo $items['qty'] ?></td>
                            <td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></td>
                            <td align="right">Rp.<?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
                        </tr>

                    <?php endforeach; ?>
                    <tr>
                        <td colspan="4"></td>
                        <td align="right">Rp.<?php echo number_format($this->cart->total(), 0, ',', '.') ?>></td>
                    </tr>
                </table>

                <div align="center">
                    <a href="<?= base_url('user/dashboard/hapus_keranjang') ?>">
                        <div class="btn btn-sm btn-danger">Hapus</div>
                    </a>
                    <a href="<?= base_url('user/mobil') ?>">
                        <div class="btn btn-sm btn-primary">Lanjut</div>
                    </a>
                    <a href="<?= base_url('user/konfirmasi') ?>">
                        <div class="btn btn-sm btn-success">Pembayaran</div>
                    </a>
                </div>

                <div class="pay-wrapper" style="text-align: center;">
                    <h4>Kami Menerima Pembayaran Melalui</h4>
                    <br>

                    <div class="card-deck">
                        <div class="card mb-4">
                            <img src="<?= base_url('assets/img/bank/1.png') ?>" class="card-img-top" alt="<?= base_url('assets/img/bank/1.png') ?>">
                            <div class="card-body">
                                <h5 class="card-title">A.n Reynaldi Fikri H</h5>
                                <p class="card-text">XXX-XXXXX-XXX</p>
                            </div>

                        </div>
                        <div class="card mb-4">
                            <img src="<?= base_url('assets/img/bank/2.png') ?>" class="card-img-top" alt="<?= base_url('assets/img/bank/2.png') ?>">
                            <div class="card-body">
                                <h5 class="card-title">A.n Reynaldi Fikri H</h5>
                                <p class="card-text">XXX-XXXXX-XXX</p>
                            </div>

                        </div>
                        <div class="card mb-4">
                            <img src="<?= base_url('assets/img/bank/3.jpg') ?>" class="card-img-top" alt="<?= base_url('assets/img/bank/3.jpg') ?>">
                            <div class="card-body">
                                <h5 class="card-title">A.n Reynaldi Fikri H</h5>
                                <p class="card-text">XXX-XXXXX-XXX</p>
                            </div>

                        </div>

                        <div class="card mb-4">
                            <img src="<?= base_url('assets/img/bank/4.png') ?>" class="card-img-top" alt="<?= base_url('assets/img/bank/4.png') ?>">
                            <div class="card-body">
                                <h5 class="card-title">A.n Reynaldi Fikri H</h5>
                                <p class="card-text">XXX-XXXXX-XXX</p>
                            </div>

                        </div>
                        <div class="card mb-4">
                            <img src="<?= base_url('assets/img/bank/5.png') ?>" class="card-img-top" alt="<?= base_url('assets/img/bank/5.png') ?>">
                            <div class="card-body">
                                <h5 class="card-title">A.n Reynaldi Fikri H</h5>
                                <p class="card-text">XXX-XXXXX-XXX</p>
                            </div>

                        </div>
                        <div class="card mb-4">
                            <img src="<?= base_url('assets/img/bank/6.png') ?>" class="card-img-top" alt="<?= base_url('assets/img/bank/6.png') ?>">
                            <div class="card-body">
                                <h5 class="card-title">A.n Reynaldi Fikri H</h5>
                                <p class="card-text">XXX-XXXXX-XXX</p>
                            </div>

                        </div>
                    </div>

                </div>