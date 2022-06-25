<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css')?>">
    <title><?= $title ?></title>
</head>
<body>

    <?php if($title !== 'Login' && $title !== 'Video'): ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('assets/img/logo.png') ?>" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav-akun dropdown ms-auto">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle rounded-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <?= $this->session->nama ?>
                        </button>
                        <div class="dropdown-menu rounded-0 mt-4" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item" href="<?= base_url('profile')?>">Profile</a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="<?= base_url('login/logout')?>">Keluar</a>
                        </div>   
                    </div>
                </div>
            </div>
        </nav>
    <?php endif; ?>