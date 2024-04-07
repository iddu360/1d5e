<?= $this->extend("layouts/master") ?>
<?= $this->section("body-contents") ?>

<div class="container-fluid py-4">

    <?php
    if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show my-3">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php elseif (session()->getFlashdata('failed')) : ?>
        <div class="alert alert-danger alert-dismissible fade show my-3">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?= session()->getFlashdata('failed') ?>
        </div>
    <?php endif; ?>

    <?php $validation =  \Config\Services::validation(); ?>
    <div class="container">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Registration </h4>
                    </div>

                    <div class="card-body p-4">

                        <form action="<?php echo base_url('/register'); ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control <?php if ($validation->getError('firstname')) : ?>is-invalid<?php endif ?>" placeholder="Enter First Name" id=" firstname" name="firstname" value="<?= set_value('firstname') ?>">
                                <?php if (isset($validation)) : ?>
                                    <small class="text-danger"><?= $validation->getError('firstname') ?></small>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control <?php if ($validation->getError('lastname')) : ?>is-invalid<?php endif ?>" placeholder="Enter Last Name" id="lastname" name="lastname" value="<?= set_value('lastname') ?>">
                                <?php if (isset($validation)) : ?>
                                    <small class="text-danger"><?= $validation->getError('lastname') ?></small>
                                <?php endif; ?>
                            </div>


                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control <?php if ($validation->getError('email')) : ?>is-invalid<?php endif ?>" placeholder="Enter Email" id="email" name="email" value="<?= set_value('email') ?>">
                                <?php if (isset($validation)) : ?>
                                    <small class="text-danger"><?= $validation->getError('email') ?></small>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control <?php if ($validation->getError('firstname')) : ?>is-invalid<?php endif ?>" placeholder="Enter Password" id="password" name="password">
                                <?php if (isset($validation)) : ?>
                                    <small class="text-danger"><?= $validation->getError('password') ?></small>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control <?php if ($validation->getError('firstname')) : ?>is-invalid<?php endif ?>" placeholder="Enter confirm password" id="confirm_password" name="confirm_password">
                                <?php if (isset($validation)) : ?>
                                    <small class="text-danger"><?= $validation->getError('confirm_password') ?></small>
                                <?php endif; ?>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-block">Register Now</button>
                                <p class="text-center">Have already an account <a href="<?php echo base_url('/login'); ?>">Login here</a>
                                <p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>