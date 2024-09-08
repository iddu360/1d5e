<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>custom helper</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <h3 class="text-info text-center">Custom Helper in CodeIgniter</h3> <br>
  <div class="container">
    <div class="panel-group">
      <div class="panel panel-primary">
        <div class="panel-heading">Custom Helper</div>
        <div class="panel-body">
          <div class="form-group">
            <label for="" class="control-label col-sm-2">Select your course</label>
            <div class="col-sm-5">
              <?= custom_helper_ex() ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>