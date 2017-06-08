<?php if($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET["hethang"]))
		{
		echo '<SCRIPT LANGUAGE="JavaScript">
			alert("hết hàng");	
		</SCRIPT>';
		} ?>

<?php
	include ('thuvien/config.php');
	
	$id = $_GET['id'];
	$sql="select * from tbl_giaodich where ID='$id'";	
	
	$run=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($run);


?>


<form action="thuvien/giaodich/xuly_suagd.php" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
	<tr>
		<td colspan="2"><div align="center"> SỬA GIAO DỊCH</div></td>
		<!--ID ẩn--><input  type="hidden" name = 'id' value="<?php echo $id;?>" />
	</tr>
	
	<tr>
		<td>Tên khách hàng </td>
		<td><input type="text" name="tenkh" value="<?php echo $row["ten_khachhang"]; ?>" required></td>		
	</tr>
	
	<tr>
		<td>Mã sản phẩm </td>
		<td><input type="text" name="idsp" value="<?php echo $row['id_sp'] ?>" required></td>		
	</tr>
	
	<tr>
		<td>Giá sản phẩm(triệu VNĐ)</td>
		<td><input type="number" name="gia" value="<?php echo $row['gia'] ?>" required></td>
	</tr>
	
	<tr>
		<td>Số lượng:	</td>
			<td>
				<input type="number" name ="soluong"  size ="20" maxlength="2"  value="<?php echo $row['soluong'] ?>" required/>
		</td>								
								
	</tr>
	
	<tr>
		<td>Ngày đặt hàng :	</td>
			<td>
				<input type="date" name="ngay" value="<?php echo $row['ngay_giaodich'] ?>" required>
		</td>								
								
	</tr>
	
	<tr>
		<td>Số điện thoại:	</td>
			<td>
				<input type="number" name ="sdt"  size ="20" maxlength="13"  value="<?php echo $row['sdt'] ?>" required/>
		</td>								
								
	</tr>
	
	<tr>
		<td>Email	</td>
			<td>
				<input type="email" name ="email"  size ="20"   value="<?php echo $row['email'] ?>" />
		</td>						
	</tr>
	<?php if($row['trangthai']==0) {?>
	 <tr>
		<td>Trạng thái</td>
		<td>
			
			<input type="radio" name="tt" value="1"  /> Xác nhận ---
			<input type="radio" name="tt" value="0" checked/> Chưa xác nhận	
			
		</td>
	</tr>	 
	<?php }?>	
	<tr>
		<td colspan="2">
			<div align="center">
				<input type ="submit" value ="Sửa Giao Dịch" name="btn_suagd" class="btn"/>
			</div>
		</td>
	</tr>

<?php
	
	include ('thuvien/close.php'); ?>
</table>
</form>