<form action="thuvien/sanpham/xuly_them1.php" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
	<tr>
		<td colspan="2"><div align="center"> CHI TIẾT SẢN PHẨM</div></td>
		
	</tr>
	
	<tr>
		<td>Tên sản phẩm </td>
		<td><input type="text" name="tensp" required ></td>
	</tr>
	
	<tr>
		<td>Giá sản phẩm(triệu VNĐ)</td>
		<td><input type="number" name="gia" required ></td>
	</tr>
	
	<tr>
		<td>Hình ảnh</td>
		<td><input type="file" name="hinhanh" required></td>
	</tr>
	
	<tr>
		<td>Số lượng:	</td>
		<td>
			<input type="number" name ="soluong"  size ="20" maxlength="11" />
		</td>								
	</tr>

	<tr>
		<td>Trạng thái</td>
		<td>
			<input type="radio" name="tt" value="1" checked /> Hiện ---
			<input type="radio" name="tt" value="0" /> Ẩn		
		</td>
	</tr>	
	
	<tr>
	<td colspan="2">
		<div align="center">
			<input type ="submit" value ="Thêm Sản Phẩm" name="btn_add" class="btn"/>
		</div>
	</td>
	</tr>

</table>
</form>