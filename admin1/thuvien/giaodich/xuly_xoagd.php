<?php
	include('../config.php');
	if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id']))
	{
		$id = $_GET["id"];
		$sql_xoa = "DELETE FROM `tbl_giaodich` WHERE `ID`='$id'";
		
		mysqli_query($conn, $sql_xoa);
		
		header('location:../../giaodich.php?btn=XÓA&id='.$id);
		include('../close.php');
	}
?>