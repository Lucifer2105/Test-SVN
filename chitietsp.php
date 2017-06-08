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
				$conlai = $_POST['soluong'];
				$id = $_POST['ID'];
				$sql = "SELECT * FROM tbl_danhmucsp1 WHERE ID = '$id'";
				$kq = mysqli_query($conn,$sql);
				while ( $ct = mysqli_fetch_array($kq)) {
			?>

			<form action="dathang.php" method="POST">
				<h1><b><center> Chi Tiết </center></b></h1>

				<table>
					<tr>
						<td width="200px" align="right">
							Tên Chó : 							
							<input type="hidden" name="IDSP" value="<?php echo $id  ?>">
						</td>

						<td width="200px">
							<label><?php echo $ct['tensp']; ?></label>
						</td>

						<td rowspan="4" width="600px">
							<img src="admin1/pic/dogs/<?php echo $ct['anh']; ?>" width = "500px" height = "500px">
						</td>
					</tr>

					<tr>
						<td align="right">
							Số Lượng Còn Lại : 
						</td>

						<td>
							<label><?php echo $ct['soluong']; ?></label>							
						</td>
					</tr>

					<tr>
						<td align="right">
							Giá : 
						</td>

						<td>
							<input type="hidden" name="gia" value="<?php echo $ct['gia']; ?>">
							<label><?php echo $ct['gia']; ?></label>
						</td>
					</tr>

					<tr>
						<td align="right">
							Ngày Nhập Kho : 
						</td>

						<td>
							<label><?php echo $ct['ngaynhap']; ?></label>
						</td>
					</tr>
				</table>

				<center>
					<?php  
            		if ($conlai = '0'  ) {
            			echo "<center><h1><b>Só lượng chó còn lại không đủ, cảm ơn quý khách đã quan tâm </b></h1></center>";
            		}else {
            		?>


            			<input type="submit" name="btSubmitLogin" value="Đặt Hàng">

            		<?php
           			}
					?>
				</center>
			</form>
			<?php  
				}
			?>
		</div>
	</body>

	<?php  
		include('thuvien/close.php');
	?>
</html>