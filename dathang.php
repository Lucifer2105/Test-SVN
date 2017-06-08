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

		<?php
			$idsp = $_POST['IDSP'];
			$gia = $_POST['gia'];
		?>
		<div style="background-image:url('pic/bg1.jpg'); width: 1000px; margin-left: 160px; margin-right: 160px;">
			<img src="pic\banner2_dogshop.jpg" width="1000px" height=" auto">
			<form action="xacnhan.php" method="post" enctype="multipart/form-data">
			<table width="100%" border="1">
				<tr>
					<td colspan="2"><div align="center"> GIAO DỊCH</div></td>
				

					<input type="hidden" name="IDSP" value="<?php echo $idsp; ?>">
					<input type="hidden" name="gia" value="<?php echo $gia; ?>">
				</tr>
				
				<tr>
					<td>Tên khách hàng </td>
					<td><input type="text" name="tenkh" required></td>		
				</tr>
				
				<tr>
					<td>Số lượng:	</td>
						<td>
							<input type="number" name ="soluong"  size ="20" maxlength="2"  required/>
					</td>								
											
				</tr>
				
				<tr>
					<td>Số điện thoại:	</td>
						<td>
							<input type="number" name ="sdt"  size ="20" maxlength="13" required/>
					</td>								
											
				</tr>
				
				<tr>
					<td>Email	</td>
						<td>
							<input type="email" name ="email"  size ="20" />
					</td>						
				</tr>

				<tr>
					<td colspan="2">
						<div align="center">
							<input type ="submit" value ="Đặt Hàng" name="btn_suagd" class="btn"/>
						</div>
					</td>
				</tr>
		</div>
	</body>

	<?php  
		include('thuvien/close.php');
	?>
</html>