<!-- form tambah data -->
<div class="container">
    <div class="row mt-3 pt-5">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Form Ubah Data
            </div>
            <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $peoples['id']; ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?= $peoples['name']; ?>">
                    <small class="text-danger"><?= form_error('name'); ?></small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?= $peoples['email']; ?>">
                    <small class="text-danger"><?= form_error('email'); ?></small>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address" value="<?= $peoples['address']; ?>">
                    <small class="text-danger"><?= form_error('address'); ?></small>
                </div>
                <button class="btn btn-primary float-right" type="submit" name="tambah">Ubah Data</button>
                <a href="<?= base_url('data'); ?>" class="btn btn-primary float-left" type="submit" name="tambah">Kembali</a>
            </form>
            </div>
        </div>

        </div>
    </div>
</div>