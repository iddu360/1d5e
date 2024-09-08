<?= $this->extend("layouts/master") ?>
<?= $this->section("body-contents") ?>
<style>
    .error {
        color: #dc3545;
    }
</style>
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
                        <form id="registrationForm">
                            <?= csrf_field() ?>
                            <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                            <div class="mb-3 form-group">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="firstname" autofocus>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lastname">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" id="submit-btn" class="btn btn-primary btn-block">Register Now</button>
                                <p class="text-center">Have already an account <a href="<?php echo base_url('/login'); ?>">Login here</a>
                                <p>
                            </div>
                            <div class="response-message ms-5" style="font-size: 25px;"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src=" https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
<script>
    if ($("#registrationForm").length > 0) {
        // CSRF Hash
        var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
        var csrfHash = $('.txt_csrfname').val(); // CSRF hash
        $("#registrationForm").validate({


            rules: {
                firstname: {
                    required: true,
                    maxlength: 25
                },
                lastname: {
                    required: true,
                    maxlength: 25
                },
                email: {
                    required: true,
                    maxlength: 50,
                    email: true,
                    // remote: 'http://localhost/ci4login/checkemail.php',

                    remote: {
                        // url: "http://localhost/ci4login/user/checkemail",
                        url: 'http://localhost/ci4login/checkemail.php',
                        // type: "put",
                        // datatype: "json",
                        data: {
                            email: function() {
                                return $("#email").val();
                            }
                        },

                    },
                },
                password: {
                    required: true,
                    minlength: 5,
                    maxlength: 20,
                },
                confirm_password: {
                    required: true,
                    equalTo: "#password",
                },
            },
            messages: {
                firstname: {
                    required: "Please enter first name",
                    maxlength: "Name length should be 25 characters long."
                },
                lastname: {
                    required: "Please enter last name",
                    maxlength: "Name length should be 25 characters long."
                },
                email: {
                    required: "Please enter your email",
                    maxlength: "Email length should be 50 characters long.",
                    email: "Please enter a valid email",
                    remote: "Email already exists. Try some other email.",
                },
                password: {
                    required: "Please enter your password",
                    minlength: "Password must be greater than 5 chars",
                    maxlength: "Password must not be greater than 20 chars",
                },
                confirm_password: {
                    required: "Please re-enter your password",
                    equalTo: "Password not confirmed",
                },
            },

            errorElement: "span",
            errorPlacement: function(error, element) {
                error.addClass("invalid-feedback");
                element.closest(".form-group").append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass("is-invalid");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass("is-invalid");
            },

            submitHandler: function(form) {
                $('.response-message').removeClass('d-none');
                $('#submit-btn').html('Sending..');
                $.ajax({
                    url: "<?php echo base_url('ajax-store') ?>",
                    type: "POST",
                    data: $('#registrationForm').serialize(),
                    dataType: "json",
                    success: function(response) {
                        csrf_token = response.csrf_token;
                        $('#submit-btn').html('Submit');
                        $('.response-message').html(response?.message);
                        response?.status === 'success' && $('.response-message').addClass('text-success') || $('.response-message').addClass('text-danger');
                        $('.response-message').show();
                        $('.response-message').removeClass('d-none');

                        document.getElementById("registrationForm").reset();
                        setTimeout(function() {
                            $('.response-message').hide();
                        }, 5000);

                        Swal.fire(
                            'Success!',
                            'Employee created successfully',
                            'success'
                        );
                        // window.location.href = "http://localhost/ci4login/login";
                    }
                });
            }
        })
    }
</script>

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

    $(function() {
        $('#confirm_password').password().on('show.bs.confirm_password', function(e) {
            $('#eventLog').text('On show event');
            $('#methods').prop('checked', true);
        }).on('hide.bs.confirm_password', function(e) {
            $('#eventLog').text('On hide event');
            $('#methods').prop('checked', false);
        });
        $('#methods').click(function() {
            $('#confirm_password').password('toggle');
        });
    });
</script>
<?= $this->endSection() ?>