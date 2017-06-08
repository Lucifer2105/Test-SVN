<?php 
	include('../config.php');
		$id =$_POST['id'];
		$idsp =$_POST['idsp'];
		$tenkh =$_POST['tenkh'];	
		$gia =$_POST['gia'];
		$soluong =$_POST['soluong'];
		@$trangthai=$_POST['tt'];
		$sdt = $_POST['sdt'];
		@$email = $_POST['email'];
			
		$ngaythang = $_POST['ngay'];
		
		$hethang=0;
		#kiem tra co thay doi trang thai ko
		if(isset($_POST['tt']))
		{
			#co thay doi trang thai 'chua xac nhan -> xac nhan'
			
			#thay đổi số lượng trong danhmucsp1
			$sql_sl = "SELECT `soluong` FROM `tbl_danhmucsp1` WHERE `ID`='$idsp'";	
			$run = mysqli_query($conn,$sql_sl);
			$row= mysqli_fetch_assoc($run);
			#kiem tra so luong san pham co du ko
			if($row['soluong']>$soluong)
			{
				#du so luong giao dich
				$soluong = $row['soluong'] - $soluong;
				#echo $soluong;
				$sql_changesl = "UPDATE `tbl_danhmucsp1`
									SET `soluong`=$soluong
									WHERE `ID`=$idsp";
				mysqli_query($conn,$sql_changesl);	
					
				#thay doi thong tin giao dich
				$sql_sua="UPDATE `tbl_giaodich` 
				SET `id_sp`='$idsp',`ngay_giaodich`='$ngaythang',`ten_khachhang`='$tenkh',`sdt`='$sdt',`email`='$email',`trangthai`='$trangthai',`gia`='$gia',`soluong`='$soluong' WHERE ID ='$id'	";	
			}
			else
			{
				#ko du so luong giao dich
				$hethang=1;
				
			}
			
		}
		else
		{
			#ko thay doi trang thai xac nhan
			$sql_sua="UPDATE `tbl_giaodich` 
						SET `id_sp`='$idsp',`ngay_giaodich`='$ngaythang',`ten_khachhang`='$tenkh',`sdt`='$sdt',`email`='$email',`gia`='$gia',`soluong`='$soluong' WHERE ID ='$id'	";
		}
		#echo $sql_sua;
		mysqli_query($conn,$sql_sua);
		
		include('../close.php');
		
		if($hethang==1)
		{
			header('location:../../giaodich.php?hd=sua&hethang=1&id='. $id);
		}
		else
		{
			header('location:../../giaodich.php?btn=xn&id='.$id);
		}	
		
	
?>