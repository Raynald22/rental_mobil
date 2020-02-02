<div class="site-section bg-light" id="about-section">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg">

                <?php echo form_open_multipart('user/profile/index'); ?>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $users['email']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $users['name']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">Photo</div>
                    <div class="row">
                        <div class="col">
                            <img src="<?= base_url('assets/img/') . $users['image']; ?>" class="img-thumbnail">
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </div>
        </div>