<?php
	include ('thuvien/config.php');
	$id = $_GET['id'];
	 $sql="select * from tbl_danhmucsp1 where ID='$id'";	
	
	 $run=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_assoc($run);


?>


<form action="thuvien/sanpham/xuly_sua1.php" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
	<tr>
		<td colspan="2"><div align="center"> SỬA SẢN PHẨM</div></td>
		<!--Mã sinh viên ẩn--><input  type="hidden" name = 'id' value="<?php echo $id;?>" />
	</tr>
	<tr>
		<td>Tên sản phẩm </td>
		<td><input type="text" name="tensp" value="<?php echo $row['tensp'] ?>" required></td>		
	</tr>
	<tr>
		<td>Giá sản phẩm(triệu VNĐ)</td>
		<td><input type="number" name="gia" value="<?php echo $row['gia'] ?>" required></td>
	</tr>
	<tr>
		<td>Hình ảnh</td>
		<td><input type="file" name="hinhanh" value='Đổi' ><img src="pic/dogs/<?php echo $row['anh'] ?>" width="60" height="60"></td>
	</tr>
	
	<tr>
		<td>Số lượng:	</td>
			<td>
				<input type="number" name ="soluong"  size ="20" maxlength="11"  value="<?php echo $row['soluong'] ?>" required/>
		</td>								
								
	</tr>	
	
	<tr>
		<td>Trạng thái</td>
		<td>
			<?php
				if($row['trangthai']==1)
				{
					$ck1="checked";
					$ck0 ="";
				}
				else
				{
					$ck0="checked";
					$ck1 ="";
				}
			
			?>
			<input type="radio" name="tt" value="1"  <?php echo $ck1; ?>/> Hiện ---
			<input type="radio" name="tt" value="0" <?php echo $ck0; ?>/> Ẩn		
		</td>
	</tr>	
	
	<tr>
		<td colspan="2">
			<div align="center">
				<input type ="submit" value ="Sửa Sản Phẩm" name="btn_sua" class="btn"/>
			</div>
		</td>
	</tr>

<?php
	
	include ('thuvien/close.php'); ?>
</table>
</form>