<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>ĐĂNG NHẬP</h2>
  <form action="connect_login.php" method="post">
    <div class="form-group">
      <label>Tên Đăng Nhập:</label>
      <input type="text" class="form-control" name="user" id="user">
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" name="pass" >
    </div>
    <button type="submit" class="btn btn-warning">ĐĂNG NHẬP</button>
  </form>
</div>

</body>
</html>
