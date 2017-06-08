<?php

	/* Open Database */


	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='db_shopdog';
	
	$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl)or die("Lỗi kết nối:" .mysqli_connect_errno() ) ;
	
	
	mysqli_query($conn,"SET NAMES 'UTF8'");
	
	
	/* <?php include ('thuvien/config.php'); ?> */
?>
