<?php
//tao kết nối đến mysql
require('connect.php');
//câu truy vấn xóa bản ghi
$sql = "DELETE FROM book WHERE masach = '".$_GET['masach']."'";
echo $sql;
//kiểm tra
if ($conn->query($sql) === TRUE)
    //Thông báo nếu thành công
    echo 'Xóa thành công';
else
    //Hiện thông báo khi không thành công
    echo 'Không thành công. Lỗi' . $conn->error;
//ngắt kết nối
//mysqli_query($conn, $sql);
$adminURL = 'admin.php';
header('Location: '.$adminURL);
?>
