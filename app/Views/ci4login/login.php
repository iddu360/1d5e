<?= $this->extend("layouts/master") ?>
<?= $this->section("body-contents") ?>


<div class="container">
    <?php $security = \Config\Services::security(); ?>
    <?php $validation =  \Config\Services::validation(); ?>
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

    <div class="row justify-content-md-center mt-5">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Sign In</h5>
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo base_url('/login'); ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control  <?php if ($validation->getError('email')) : ?>is-invalid<?php endif ?>" id="email" name="email">

                            <?php if ($validation->getError('email')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email') ?>
                                </div>

                            <?php endif; ?>

                        </div>


                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control <?php if ($validation->getError('password')) : ?>is-invalid<?php endif ?>" id="password" name="password">
                            <?php if ($validation->getError('password')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password') ?>
                                </div>

                            <?php endif; ?>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            <p class="text-center">Don't have account? <a href="<?php echo base_url('/'); ?>">Register here</a>
                            <p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src=" https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
<script>
    $(function() {
        $('#password').password().on('show.bs.password', function(e) {
            $('#eventLog').text('On show event');
            $('#methods').prop('checked', true);
        }).on('hide.bs.password', function(e) {
            $('#eventLog').text('On hide event');
            $('#methods').prop('checked', false);
        });
        $('#methods').click(function() {
            $('#password').password('toggle');
        });
    });
</script>

<?= $this->endSection() ?>