<?= $this->extend('layout/master'); ?>
<?= $this->section("main"); ?>
<section class="bg-secondary py-3 py-md-5 text-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="mb-4 display-4 text-center fw-bold">Contact</h2>
                <p class="text-secondary mb-5 text-center text-light">Orci varius natoque penatibus et magnis dis parturient
                    montes, nascetur ridiculus mus. Pellentesque et neque id ligula mattis commodo.</p>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-light-subtle">
            </div>
        </div>
    </div>

    <div class="container">
    <?php
    $session = \Config\Services::session();
    // success
    if ($session->getFlashdata('msg-success')) {
    ?>
      <div class="alert alert-success alert-dismissible fade show my-3">
        <button type="button" class="btn-close" data-bs-dismiss="alert"> </button>
        <?= $session->getFlashdata('msg-success'); ?>
      </div>
    <?php
    }

    //danger
    if ($session->getFlashdata('msg-danger')) {
    ?>
      <div class="alert alert-danger alert-dismissible fade show my-3">
        <button type="button" class="btn-close" data-bs-dismiss="alert"> </button>
        <?= $session->getFlashdata('msg-danger'); ?>
      </div>
    <?php
    }
    ?>
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-9">
                <div class="bg-dark border rounded shadow-sm overflow-hidden">

                    <?php
                    $attributes = [
                        "method" => "post",
                        "name"=> "myForm1",
                        "class" => "contact myForm1",
                        "id" => "myForm1",
                        "enctype" => "multipart/form-data",
                        "action"=> "<?= base_url('contact') ?>"
                    ];
                    echo form_open('email/send');

                    ?>
                    <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                        <div class="col-12">
                            <?php
                            $data = [
                                'class' => 'form-label'
                            ];
                            echo form_label('Full Name', 'fullname', $data);
                            ?>
                            <?php
                            $data = [
                                'type' => 'text',
                                'name' => 'fullname',
                                'id' => 'fullname',
                                'value' => '',
                                'class' => 'form-control bg-secondary'
                            ];
                            echo form_input($data);
                            ?>
                        </div>
                        <div class="col-12 col-md-6">
                            <?php
                            $data = [
                                'class' => 'form-label'
                            ];
                            echo form_label('Email', 'email', $data);
                            ?>
                            <div class="input-group bg-secondary">
                                <span class="input-group-text bg-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                    </svg>
                                </span>
                                <?php
                            $data = [
                                'type' => 'email',
                                'name' => 'email',
                                'id' => 'email',
                                'value' => '',
                                'class' => 'form-control bg-secondary'
                            ];
                            echo form_input($data);
                            ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <?php
                            $data = [
                                'class' => 'form-label'
                            ];
                            echo form_label('Phone Number', 'number', $data);
                            ?>
                            <div class="input-group bg-secondary">
                                <span class="input-group-text bg-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                </span>
                                <?php
                            $data = [
                                'type' => 'tel',
                                'name' => 'phone',
                                'id' => 'phone',
                                'value' => '',
                                'class' => 'form-control bg-secondary'
                            ];
                            echo form_input($data);
                            ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <?php
                            $data = [
                                'class' => 'form-label'
                            ];
                            echo form_label('Subject', 'subject', $data);
                            ?>
                            <?php
                            $data = [
                                'type' => 'text',
                                'name' => 'subject',
                                'id' => 'subject',
                                'value' => '',
                                'class' => 'form-control bg-secondary'
                            ];
                            echo form_input($data);
                            ?>
                        </div>
                        <div class="col-12">
                            <!-- <label for="message" class="form-label">Message <span class="text-danger">*</span></label> -->
                            <?php
                            $data = [
                                'class' => 'form-label'
                            ];
                            echo form_label('Message', 'message', $data);
                            ?>
                            <!-- <textarea class="form-control bg-secondary" id="message" name="message" rows="3" required></textarea> -->
                            <?php
                            $data = [
                                // 'type' => 'tel',
                                'name' => 'message',
                                'id' => 'message',
                                'rows' => 3,
                                'class' => 'form-control bg-secondary',
                            ];
                            echo form_textarea($data);
                            ?>
                                
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <!-- <button class="btn btn-primary btn-lg" type="submit">Submit</button> -->
                                <?php
                                $data = [
                                    'type' => 'submit',
                                    'name' => '',
                                    'id' => '',
                                    'value' => 'Submit',
                                    'content'=> 'Submit',
                                    'class' => 'btn btn-primary btn-lg',
                                ];

                                echo form_button($data);
                                ?>
                            </div>
                        </div>
                    </div>
                    <?= form_close(); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>