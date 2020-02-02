<div class="container-fluid">
    <table class="table table-bordered table-hover table-striped">
        <h4>Data Penyewa</h4>
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO TELP</th>
        </tr>

        <?php
        foreach ($order as $ord) : ?>
            <tr>
                <td><?= $ord->id ?></td>
                <td><?= $ord->nama ?></td>
                <td><?= $ord->alamat ?></td>
                <td><?= $ord->no_telp ?></td>
            <?php endforeach; ?>

    </table>
</div>