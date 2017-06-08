<!DOCTYPE html>
<html>
	<head>
		<title>Chi Tiết Đơn Hàng</title>

		<meta charset="utf-8">
		
		<?php  
			include('thuvien/config.php');
		?>
	</head>

	<body bgcolor="grey">
		<div style="background-image:url('pic/bg1.jpg'); width: 1000px; margin-left: 160px; margin-right: 160px;">
			<img src="pic\banner2_dogshop.jpg" width="1000px" height=" auto">

			<?php
			$idsp =$_POST['IDSP'];	
			$tenkh=$_POST['tenkh'];
			$gia =$_POST['gia'];
			$soluong =$_POST['soluong'];
			$trangthai=0;
			$sdt =$_POST['sdt'];
			$email =$_POST['email'];
				
			$ngaythang = date("Y-m-d");
			$sql_add="INSERT INTO `tbl_giaodich`(`id_sp`, `ngay_giaodich`, `ten_khachhang`, `sdt`, `email`, `trangthai`, `gia`, `soluong`) VALUES ($idsp','$ngaythang','$tenkh','$sdt','$email','$trangthai','$gia','$soluong')";
			mysqli_query($conn,$sql_add);
			?>

			<center>
				<h1><b> BẠN ĐÃ ĐẶT HÀNG THÀNH CÔNG</b></h1>
				<a href="index.php">Về trang chủ</a><br>
			</center>
		</div>


	</body>

	<?php  
		include('thuvien/close.php');
	?>
</html>