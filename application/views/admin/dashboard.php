<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title, $users['name']; ?></h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/') . $users['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $users['name']; ?></h5>
                    <p class="card-text"><?= $users['email']; ?> </p>
                    <p class="card-text"><small class="text-muted">Admin since <?= date('d F Y', $users['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>