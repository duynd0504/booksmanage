<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
  <title>Thêm Sách</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php require('connect.php');     ?>
<?php require('connect_db.php');  ?>
<div class="container">
  <h2 align="center">THÊM MỘT BẢN GHI</h2>
  <form action="connect_add.php">
    <div class="form-group">
      <label>Mã Sách:</label>
      <input type="text" class="form-control" name="masach" placeholder="Nhập Mã Sách" required="true" >
    </div>
    <div class="form-group">
      <label for="email">Tên Sách:</label>
      <input type="text" class="form-control" name="tensach" placeholder="Nhập Tên Sách" required="true">
    </div>
    <div class="form-group">
      <label>Tác giả:</label>
      <input type="text" class="form-control" name="tacgia" placeholder="Nhập Tác Giả" required="true">
    </div>
  <button type="submit" class="btn btn-primary" >THÊM VÀO CSDL</button>
  </form>
</div>

</body>
</html>
