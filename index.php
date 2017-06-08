<!DOCTYPE html>
<html>
	<head>
		<title> Shop Dogs</title>

		<meta charset="utf-8">
		
		<?php  
			include('thuvien/config.php');
		?>
	</head>

	<body bgcolor="grey">
		
			<div style="background-image:url('pic/bg1.jpg'); width: 1000px; margin-left: 160px; margin-right: 160px;">
				<img src="pic\banner2_dogshop.jpg" width="1000px" height=" auto">

				<h3 style="color: black; text-align: center;">CHÀO MỪNG BẠN ĐẾN VỚI SHOP DOG</h3>

				<div style="width: 300px;float: right;">
					<h4 style="text-align: center;">Tìm Kiếm</h4>
					
					<div>
						<form action="" method="POST">						
							<input type = "text" name = "ten" placeholder = '          Nhập vào từ cần tìm'  style ="background: url('pic/find.png') no-repeat; border-radius: 10px; height: 30px; border: 1px solid black;" size = 30 required = "true">

							<br>

							<input type = "radio" name ="txtname" value ="gia" checked= "true">Tìm theo Giá --
							<input type = "radio" name ="txtname" value ="tensp">Tìm theo Tên Chó 
						</form>
					</div>
				</div>

				<div>
					<h4 style="text-align: center;">Danh Sách</h4>

					<table style="float: center;">

					<?php  
						$sql = "SELECT ID,tensp,anh FROM tbl_danhmucsp1";
						$kq = mysqli_query($conn,$sql);
						$i=1;
						while (	$row = mysqli_fetch_array($kq)) {
					?>

						<form action="chitietsp.php" method="POST">
							<tr>
								<td>
									<lable name="tencho" style="margin-left: 50px; margin-top: 40px; margin-bottom: 40px; line-height: 20px; float: left; size: 50;"><?php echo $row['tensp']; ?></lable>
									<input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
									<input type="hidden" name="soluong" value="<?php echo $row['soluong']; ?>">

								</td>

								<td>
									<img src="admin1/pic/dogs/<?php echo $row['anh']; ?>" width = "100px" height = "100px" style="margin-left: 100px;" name = "anhcho">
								</td>

								<td>							
									<input type="submit" name="btSubmitLogin" value="Đặt Hàng" style="margin-left: 50px; margin-top: 40px; margin-bottom: 40px; line-height: 20px; float: left; size: 50;"> 
								</td>
							</tr>			
						</form>
					<?php
						$i = $i + 1;  
						}
					?>

					</table>
				</div>
			</div>
		
	</body>

	<?php  
		include('thuvien/close.php');
	?>
</html>