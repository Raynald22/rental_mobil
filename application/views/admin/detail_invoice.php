<div class="container-fluid">


    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>ID</th>
            <th>NAMA MOBIL</th>
            <th>JUMLAH HARI</th>
            <th>SUBTOTAL</th>
        </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
            ?>

            <tr>
                <td><?= $psn->id_mobil ?></td>
                <td><?= $psn->nama ?></td>
                <td><?= $psn->jumlah ?></td>
                <td><?= number_format($psn->harga, 0, ',', '.') ?></td>
                <td><?= number_format($subtotal, 0, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="4" align="right">Grand Total</td>
            <td align="right">Rp. <?= number_format($total, 0, ',', '.') ?></td>
        </tr>

    </table>

    <a href="<?= base_url('admin/invoice/index') ?>">
        <div class="btn btn-sm btn-primary">Kembali</div>
    </a>

    <a class="btn btn-sm btn-primary" href="<?= base_url('admin/laporanpdf') ?>"><i class="fa fa-print"></i>Print</a>

</div>