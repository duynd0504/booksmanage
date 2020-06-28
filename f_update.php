<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
  <title>Sửa Sách</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_book";
      // tạo connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // lấy mã sách từ trang danh sách 
      $masach = $_GET['masach']; 
      // Truy vấn dữ liệu theo ID 
      $sql = "select *from book where masach=$masach"; 
      $recordset = mysqli_query($conn,$sql); 
      //đọc một dòng từ tập bản ghi 
      $row = mysqli_fetch_assoc($recordset);
?>
<div class="container">
  <h2 align="center">THÊM MỘT BẢN GHI</h2>
  <form action="connect_update.php">
    <div class="form-group">
      <label>Mã Sách:</label>
      <input type="text" class="form-control" name="tmasach" value="<?php echo $row['masach'];?>" readonly >
    </div>
    <div class="form-group">
      <label>Mã Sách:</label>
      <input type="text" class="form-control" name="ttensach" value="<?php echo $row['tensach'];?>" >
    </div>
    <div class="form-group">  
      <label>Tác giả:</label>
      <input type="text" class="form-control" name="ttacgia" value="<?php echo $row['tacgia'];?>" >
    </div>
  <button type="submit" class="btn btn-primary" >LƯU</button>
  </form>
</div>

</body>
</html>
