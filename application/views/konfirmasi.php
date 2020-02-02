<div class="site-section bg-light" id="about-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">

                <div class="btn btn-sm btn-success">
                    <?php
                    $grand_total = 0;
                    if ($keranjang = $this->cart->contents()) {
                        foreach ($keranjang as $item) {
                            $grand_total = $grand_total + $item['subtotal'];
                        }
                        echo "<h4>Total Keseluruhan : Rp. " . number_format($grand_total, 0, ',', '.');

                        ?>
                    </div><br><br>

                    <h3>Input Pembayaran</h3>

                    <form method="post" action="<?= base_url() ?>dashboard/proses_pesanan">

                        <div class="form-group">
                            <label>Nama lengkap</label>
                            <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>No.Telp</label>
                            <input type="text" name="no_telp" placeholder="Nomor Telephone" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Pilih BANK</label>
                            <select class="form-control">
                                <option>BCA | XXX-XXXX-XX</option>>
                                <option>BRI | XXX-XXXX-XX</option>
                                <option>Mandiri | XXX-XXXX-XX</option>
                                <option>CIMB Niaga | XXX-XXXX-XX</option>
                                <option>BNI | XXX-XXXX-XX</option>
                                <option>BJB | XXX-XXXX-XX</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Bukti Bayar</label><br>
                            <input type="file" name="gambar" class="form_control">
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary mb-3">Bayar</button>
                    </form>

                <?php
                } else { }
                echo "  <h4> Keranjang Anda Masih Kosong";
                ?>
            </div>
        </div>
        <div clas s="col-md-2 ">
        </div>
    </div>
</div>