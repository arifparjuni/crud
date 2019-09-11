<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/'); ?>bootstrap.css">

<!-- my css -->
<style>
    section {
        min-height: 420px;
    }
</style>

<title><?= $title; ?></title>
</head>
<body class="mt-5">

    <!-- awal nav -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">CRUD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home/about'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('data'); ?>">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home/portfolio'); ?>">Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir nav -->
	