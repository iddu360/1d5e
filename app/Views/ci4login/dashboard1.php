<?= $this->extend("layouts/master") ?>
<?= $this->section("body-contents") ?>
<?php $session = \Config\Services::session(); ?>
<h1 style="color:blueviolet">Welcome to My Website</h1>
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Dashboard</a>
                    <div class="d-flex">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="<?php echo base_url('/logout'); ?>">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h2 class="text-center mt-5">User Dashboard</h2>
            <h2>Welcome: <?= $session->get('email'); ?> </h2>
        </div>
    </div>

</div>
<?= $this->endSection() ?>