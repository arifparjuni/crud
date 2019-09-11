<!-- table hover -->
<div class="container pt-3 pb-3 justify-content-center">
    <h2>Lis of Data</h2>
    <?php if($this->session->flashdata('flash')) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                        <span arial-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        
    </div>

    <div class="row mt-1">
        <div class="col-md-6">
            <a href="<?= base_url('data/tambah') ?>" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="col-md-6">
            <form action="<?= base_url('data'); ?>" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search keyword.." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg">
            <h5>Results : <?= $total_rows; ?></h5>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($peoples)) : ?>
                    <tr>
                        <td colspan="4">

                            <div class="alert alert-danger" role="alert">
                                data not found!
                            </div>

                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php $i = 1; foreach($peoples as $peoples) : ?>
                        <tr>
                            <th scope="row"><?= ++$start; ?></th>
                            <td><?= $peoples['name']; ?></td>
                            <td><?= $peoples['email']; ?></td>
                            <td>
                                <a class="badge badge-warning" href="<?= base_url('data/detail/'); ?><?= $peoples['id']; ?>">detail</a>
                                <a class="badge badge-success" href="<?= base_url('data/ubah/'); ?><?= $peoples['id']; ?>">edit</a>
                                <a class="badge badge-danger" href="<?= base_url('data/hapus/'); ?><?= $peoples['id']; ?>" onclick="return confirm('yakin?');">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            <?= $this->pagination->create_links(); ?>
            
        </div>
    </div>
</div>