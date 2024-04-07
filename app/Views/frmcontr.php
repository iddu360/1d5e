<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
      .container{
        height: 90vh;
      }
    </style>
<body>
  <div class="container text-center p-5">
      <h1 class="m-5 p-5"><?=$heading?></h1>
      <h4 class="m-5 p-5"><?=$message?></h4>
  </div>
</body>
</html>