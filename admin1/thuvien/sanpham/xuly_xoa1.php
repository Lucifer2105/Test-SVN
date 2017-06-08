<?php 
	include('../config.php');
		$id =$_GET['id'];
		$sql_xoa="DELETE FROM `tbl_danhmucsp1` WHERE `tbl_danhmucsp1`.`ID` = $id";
		#echo $sql_sua;
		mysqli_query($conn,$sql_xoa);
		
		include('../close.php');
		header('location:../../index.php');
	
?>