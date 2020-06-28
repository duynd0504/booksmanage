<?php 
	//khai báo sử dụng seesion 
	session_start(); 
	//khai báo utf-8 
	header('Content-Type: text/html; charset=UTF-8');
	//Xử lý đăng nhập
	if (isset($_POST['dangnhap']))
	{
	//Kết nối tới database
	include('connect.php');
	   
	//Lấy dữ liệu nhập vào
	$username = $_POST['username'];
	$password = $_POST['password'];
	   
	//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
	if (!$username || !$password) 
	{
		echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
		exit;
	}
	   
	// mã hóa pasword
	$password = md5($password);
	   
	//Kiểm tra tên đăng nhập có tồn tại không
	$query = "SELECT username, password FROM thanhvien WHERE username='".$username."'";
	if (mysqli_num_rows($query) == 0) 
	{
		echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
		exit;
	}
	   
	//Lấy mật khẩu trong database ra
	$row = mysqli_fetch_array($query);
	   
	//So sánh 2 mật khẩu có trùng khớp hay không
	if ($password != $row['password']) {
		echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
		exit;
	}
	   
	//Lưu tên đăng nhập
	$_SESSION['username'] = $username;
	echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href=''>Thoát</a>";
	
	die();
}
?>