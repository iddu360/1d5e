<!doctype html>
<html lang="en">
<head>
    <title>User Registration and Login in Codeigniter 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SITM</title>
    <!-- bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>

    <?php $session = \Config\Services::session(); ?>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <div class="container-fluid ps-5">
            <a class="navbar-brand" href="#">Sai Pali Institute of Technology & Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item  pe-5">
                        <a class="nav-link active" aria-current="page">Welcome: <?= $session->get('firstname'); ?> <?= $session->get('lastname'); ?> </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 m-auto">
                <h4 class="text-center"> Dashboard </h4>
            </div>
        </div>
    </div>
</body>
</html>