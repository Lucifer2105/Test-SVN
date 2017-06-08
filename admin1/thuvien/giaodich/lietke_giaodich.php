<?php
	
	function lietke_gd($st_sql,$diachi)
	{
		include ("thuvien/config.php");
		
		$ketqua = mysqli_query($conn,$st_sql);
		@$sodong = mysqli_num_rows($ketqua);
		if(@$sodong >0)
		{
			// TÌM TỔNG SỐ RECORDS
			$total_records=$sodong;
			
			//  TÌM LIMIT VÀ CURRENT_PAGE
			$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
			$limit = 10;
			
			//  TÍNH TOÁN TOTAL_PAGE VÀ START
			// tổng số trang
			$total_page = ceil($total_records / $limit);
	 
			// Giới hạn current_page trong khoảng 1 đến total_page
			if ($current_page > $total_page)
			{
				$current_page = $total_page;
			}
			
			else if ($current_page < 1)
			{
				$current_page = 1;
			}
			
			// Tìm Start
			$start = ($current_page - 1) * $limit;
			
			 //  TRUY VẤN LẤY DANH SÁCH DỮ LIỆU
			// Có limit và start rồi thì truy vấn CSDL lấy danh sách dữ liệu
			$result = mysqli_query($conn, $st_sql." LIMIT $start, $limit");
			
			// PHẦN HIỂN THỊ DỮ LIỆU
				
				// HIỂN THỊ DANH SÁCH SẢN PHẨM
				$i=1;
				
				#đưa ra số kết quả
				echo "<center> <h3> Có $sodong giao dịch </h3></center> ";

				
				echo '<table class="sp">';
				echo '<tr class="rowhead">';
				echo'
						<td> STT</td>
						<td>Tên khách hàng</td>
						<td>Mã sản phẩm</td>						
						<td>Giá(triệu VND)</td>
						<td>Số lượng</td>
						<td>Ngày đặt hàng</td>						
						<td>Số điện thoại</td>
						<td>Email</td>
						<td>Trang Thái</td>	
						
						<td>Xóa</td>
						<td>Sửa</td>
											
				';
				while ($row = mysqli_fetch_assoc($result))
				{	
					#đổi ngày tháng YYYY/mm/dd ->dd/mm/YYYY
					$date_sql = $row["ngay_giaodich"];
					$date_vn = date("d/m/Y", strtotime($date_sql));
					
					#kiểm tra đơn hàng đã xác nhận chưa
					$xacnhan ="chưa xác nhận";
					if($row["trangthai"]==1)
						$xacnhan ="ok";
					
					#chia class cho hàng trong bảng
					$rowClass = '"row1"';
					if($i%2==0)
						$rowClass='"row2"';
					
					echo '<tr class='.$rowClass.' >';
					echo'
							<td>'.$i.'</td>
							<td><br>'.$row["ten_khachhang"].'<br></td>
							<td><br>'.$row["id_sp"].'<br></td>							
							<td><br>'.$row["gia"].'<br></td>
							<td><br>'.$row["soluong"].'<br></td>
							<td><br>'.$date_vn.'<br></td>
							<td><br>'.$row["sdt"].'<br></td>							
							<td><br>'.$row["email"].'<br></td>
							<td><br>'.$xacnhan.'<br></td>
							
							
							<td>								
								<a href ="thuvien/giaodich/xuly_xoagd.php?id='. $row['ID'].' "onclick="return confirmAction()">Xóa</a>								
							</td>
							
							<td>
								<a href ="giaodich.php?hd=sua&id='. $row['ID'].' ">Sửa</a>
							</td>
						
					';
					
					echo '</tr>';
					
					$i++;
				}
				echo '</table>';
		}#if(@$sodong >0)
		else
			{
				echo 'Không có kết quả';
			}
			
			 // PHẦN HIỂN THỊ PHÂN TRANG
            // 
				echo "<center>";
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="'.$diachi.'?page='.($current_page-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="'.$diachi.'?page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="'.$diachi.'?page='.($current_page+1).'">Next</a> | ';
            }
			echo "</center>";
		include ('thuvien/close.php');
	}

	
?>