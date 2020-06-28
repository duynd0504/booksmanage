<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
  <title>Trang Quản Lý Sách Đơn Giản</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php require('connect_db.php');  ?>

<div class="container">
  <h2>Trang Quản Lý Sách Đơn Giản</h2>
  <p>Danh sách đầu sách</p>   

  <form name="#">      
  <table class="table">
    <thead>
      <tr>
        <th>Mã Sách </th>
        <th>Tên Sách</th>
        <th>Tác Giả </th>
        <th>Xóa</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : ?>
            <tr>
                <td><?php echo $row['masach']; ?></td>
                <td><?php echo $row['tensach']; ?></td>
                <td><?php echo $row['tacgia']; ?></td>
                <td>
                    <a href="delete.php?masach=<?php echo $row['masach']; ?>" onClick="alert('Xóa Thành Công!!')" class="delete">Xóa</a>
                    
                </td>
                <td>
                    <a href="f_update.php?masach=<?php echo $row['masach']; ?>">Cập nhật</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
  </table>
  <button type="button" class="btn btn-warning" id="btn_them" onclick="location.href='f_add.php';">THÊM</button>
  
  </script>
</form>
</div>

</body>
</html>
