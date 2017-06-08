<?php 
	include('../config.php');
		$id =$_POST['id'];
		$tensp =$_POST['tensp'];	
		$gia =$_POST['gia'];
		$soluong =$_POST['soluong'];
		$trangthai=$_POST['tt'];
		$hinhanh =$_FILES['hinhanh']['name'];
		$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
		
		move_uploaded_file($hinhanh_tmp,'../../pic/dogs/'.$hinhanh); #shopdog/admink/pics
			
		$ngaythang = date("Y-m-d");
		if($hinhanh=="")
		{
			$sql_sua="	UPDATE `tbl_danhmucsp1` 
					SET `tensp`='$tensp',`gia`='$gia',`soluong`='$soluong',`trangthai`='$trangthai'
					WHERE `ID`= '$id'";
			
		}
		else
		{
			$sql_sua="	UPDATE `tbl_danhmucsp1` 
					SET `tensp`='$tensp',`gia`='$gia',`soluong`='$soluong',`anh`='$hinhanh',`trangthai`='$trangthai'
					WHERE `ID`= '$id'";
		}
		
		//echo $sql_sua;
		mysqli_query($conn,$sql_sua);
		
		include('../close.php');
		header('location:../../index.php');
	
?>