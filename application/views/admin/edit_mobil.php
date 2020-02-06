<div class="container-fluid">
    <h3><i class=" fas fa-edit"></i> DATA MOBIL</h3>

    <?php foreach ($mobil as $mbl) : ?>

        <form method="post" action="<?php echo base_url() . 'admin/data_mobil/update' ?>">

            <div class="form-group">
                <label>Nama Mobil</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $mbl->nama ?>">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="hidden" name="id_mobil" class="form-control" value="<?php echo $mbl->id_mobil ?>">
                <input type="text" name="kategori" class="form-control" value="<?php echo $mbl->kategori ?>">
            </div>


            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $mbl->harga ?>">
            </div>

            <div class="form-group">
                <label>Status</label>
                <input type="text" name="status" class="form-control" value="<?php echo $mbl->status ?>">
            </div>

            <div class="form-group">
                <label>Gambar</label><br>
                <input type="file" name="gambar" class="form_control" value="<?php echo $mbl->gambar ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm"> Simpan </button>

        </form>

    <?php endforeach; ?>
</div>