<?php
//tao kết nối đến mysql
require('connect.php');
  //câu truy vấn thêm bản ghi
$sql = "INSERT INTO book (masach,tensach,tacgia) VALUES('".$_GET['masach']."','".$_GET['tensach']."','".$_GET['tacgia']."')";
//kiểm tra
if ($conn->query($sql) === TRUE)
    
    echo 'Thêm thành công';
else
    //Hiện thông báo khi không thành công
    echo 'Không thành công. Lỗi' . $conn->error;
//ngắt kết nối
//mysqli_query($conn, $sql);
$adminURL = 'admin.php';
header('Location: '.$adminURL);
?>