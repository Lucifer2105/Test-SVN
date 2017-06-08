<?php
	include('../config.php');
	if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id']))
	{
		$id = $_GET["id"];
		$sql_xn = "UPDATE `tbl_giaodich` SET `trangthai`='1' WHERE `ID`='$id'";
		
		
		mysqli_query($conn, $sql_xn);
		
		header('location:../../giaodich.php?btn=xn&id='.$id);
		include('../close.php');
	}
?>