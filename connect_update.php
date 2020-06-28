<?php
			require_once("connect.php");
			$masach = $_GET['tmasach'];
			$ten = $_GET['ttensach']; 
			$tac_gia = $_GET['ttacgia'];
			$sql= "update book set tensach = '".$ten."' , tacgia ='".$tac_gia."' where masach = '".$masach."'";
			$result = mysqli_query($conn,$sql);
			if($result === TRUE){
				header("location:admin.php");
			}
			else{
				echo 'Check lai!!!' ;
			}
?>
