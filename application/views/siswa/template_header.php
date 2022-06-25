<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css')?>">
    <title><?= $title ?></title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">SMK Hebat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ms-auto">
                    <!-- <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a> -->
                </div>
                <div class="navbar-nav-akun dropdown">
                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Mamat
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <a class="dropdown-item" href="#">Profile</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="#">Keluar</a>
                    </div>   
                </div>
            </div>
        </div>
    </nav>