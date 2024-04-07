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
  <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js" integrity="sha512-TiQST7x/0aMjgVTcep29gi+q5Lk5gVTUPE9XgN0g96rwtjEjLpod4mlBRKWHeBcvGBAEvJBmfDqh2hfMMmg+5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
</head>

<body>
  <div class="container">
    <h3>Book Store</h3>
    <br>
    <button class="btn btn-success" onclick="add_book()"><i class="glyphicon glyphicon-plus"></i>Add Book</button>
    <br>
    <br>
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Book ID</th>
          <th>Book ISBN</th>
          <th>Book Title</th>
          <th>Book Author</th>
          <th>Book Category</th>
          <th style="width: 125px;">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($books as $book) { ?>
          <tr>
            <td><?= $book->book_id; ?></td>
            <td><?= $book->book_isbn; ?></td>
            <td><?= $book->book_title; ?></td>
            <td><?= $book->book_author; ?></td>
            <td><?= $book->book_category; ?></td>
            <td class="d-flex">
              <button class="btn btn-warning me-1" onclick="edit_book(<?= $book->book_id; ?>)">Edit</button>
              <button class="btn btn-danger" onclick="delete_book(<?= $book->book_id; ?>)">Delete</button>
            </td>
          </tr>
        <?php } ?>
      </tbody>
      <tfoot>
        <tr>
          <th>Book ID</th>
          <th>Book ISBN</th>
          <th>Book Title</th>
          <th>Book Author</th>
          <th>Book Category</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</body>

</html>