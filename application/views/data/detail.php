<div class="container">
    <div class="row mt-3 pt-4">
        <div class="col-md-6">
            <!-- card buat detail -->
            <div class="card">
                    <div class="card-header">
                        Detail Data
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $peoples['name']; ?></h5>
                        <p class="card-text"><?= $peoples['email']; ?></p>
                        <p class="card-text"><?= $peoples['address']; ?></p>
                        <a href="<?= base_url('data'); ?>" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>