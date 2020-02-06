<div class="container-fluid">
    <button class="btn btn sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_mobil"><i class="fas fa-plus fa-sm"></i> Tambah Mobil</button>
    <table class="table table-bordered">
        <?= $this->session->flashdata('pesan'); ?>

        <tr>
            <th>ID</th>
            <th>NAMA MOBIL</th>
            <th>KATEGORI</th>
            <th>STATUS</th>
            <th>HARGA</th>
            <th>GAMBAR</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php
        $no = 1;
        foreach ($mobil as $mbl) : ?>
            <tr>
                <td width="3"><?php echo $no++ ?></td>
                <td width="3"><?php echo $mbl->nama ?></td>
                <td width="3"><?php echo $mbl->kategori ?></td>
                <td width="3"><?php
                                if ($mbl->status == "0") {
                                    echo "<span class='badge badge-danger'> Unavailable</span>";
                                } else {
                                    echo "<span class='badge badge-primary'> Available</span>";
                                }
                                ?>
                </td>
                <td width="3"><?php echo $mbl->harga ?></td>
                <td width="3"><img width="60px" src='<?= base_url() ?>assets/uploads/<?= $mbl->gambar; ?>'></td>
                <td width="3"><?php echo anchor('admin/data_mobil/edit/' . $mbl->id_mobil, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
                <td width="3"><?php echo anchor('admin/data_mobil/hapus/' . $mbl->id_mobil, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>

            <?php endforeach; ?>

    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambah_mobil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Mobil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'admin/data_mobil/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Mobil</label>
                        <input type="text" name="nama" class="form_control">
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                            <option>Honda</option>
                            <option>Nissan</option>
                            <option>Suzuki</option>
                            <option>Daihatsu</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form_control">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option>Available</option>
                            <option>Unavailable</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Gambar</label><br>
                        <input type="file" name="gambar" class="form_control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>