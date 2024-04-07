<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- bootstrap cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jguery validation -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js" integrity="sha512-TiQST7x/0aMjgVTcep29gi+q5Lk5gVTUPE9XgN0g96rwtjEjLpod4mlBRKWHeBcvGBAEvJBmfDqh2hfMMmg+5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <style>
    .container {
      max-width: 550px;
    }

    .error {
      color: red;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
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

    <form action="<?= base_url('contact') ?>" method="post" name="myform" id="myform">
      <div class="form-group">
        <label for="">Receiver Email</label>
        <input type="text" name="mailTo" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Your Subject</label>
        <input type="text" name="subject" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Message</label>
        <textarea name="msg" id="" cols="" rows="6" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>

<script>
  if($("#myform").length>0){
    $("#myform").validate({
      rules: {
        mailTo: {
          required: true,
          maxlength: 50,
          email: true
        },
        subject: {
          required: true
        },
        msg: {
          required: true,
          minlength: 50
        }
      },
      messages: {
        mailTo: {
          required: "Please enter mailTo",
          email: "Please enter a valid email",
          maxlength: "The email name should be less than 0r equal to {0} characters"
        },
        subject: {
          required: "Please enter subject"
        },
        msg: {
          required: "Please enter Message",
          minlength: "Enter atleast {0} characters"
        }
      }
    })
  }
</script>