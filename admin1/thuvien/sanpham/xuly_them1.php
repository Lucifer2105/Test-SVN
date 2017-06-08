<?php 
	include('../config.php');
	
	$tensp =$_POST['tensp'];	
	$gia =$_POST['gia'];
	$soluong =$_POST['soluong'];
	$trangthai=$_POST['tt'];
	$hinhanh =$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	
	move_uploaded_file($hinhanh_tmp,'../../pic/dogs/'.$hinhanh);
		
	$ngaythang = date("Y-m-d");
	$sql_add="	INSERT INTO `tbl_danhmucsp1`
				( `tensp`, `gia`, `ngaynhap`, `soluong`, `anh`, `trangthai`)
				VALUES ('$tensp',$gia,'$ngaythang',$soluong,'$hinhanh',$trangthai)";
	mysqli_query($conn,$sql_add);
	
	include('../close.php');
	header('location:../../index.php');
?>