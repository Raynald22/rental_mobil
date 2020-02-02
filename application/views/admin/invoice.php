<div class="container-fluid">
    <h4>Laporan Penyewaan Mobil</h4> <a class="btn btn-sm btn-primary" href="<?= base_url('admin/pesananpdf') ?>"><i class="fa fa-print"></i>Print</a>


    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Nama Penyewa</th>
            <th>Alamat</th>
            <th>Bukti</th>
            <th>Tanggal Pinjam</th>
            <th>Batas Kembali</th>
            <th>Aksi</th>
        </tr>

        <?php
        foreach ($order as $ord) : ?>
            <tr>
                <td><?= $ord->id ?></td>
                <td><?= $ord->nama ?></td>
                <td><?= $ord->alamat ?></td>
                <td> <img src="<?php echo base_url() . 'assets/img/bukti/' . $ord->gambar  ?>">
                <td><?= $ord->tgl_pesan ?></td>
                <td><?= $ord->batas_bayar ?></td>
                <td>
                    <div><?= anchor('admin/invoice/detail/' . $ord->id, '<div btn-sm btn-primary">Detail</div>') ?>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>

</div>