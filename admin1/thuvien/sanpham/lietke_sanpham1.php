<?php
	
	function lietke_sp($st_sql,$diachi)
	{
		include ('thuvien/config.php');
		
		$ketqua = mysqli_query($conn,$st_sql);
		@$sodong = mysqli_num_rows($ketqua);
		if(@$sodong >0)
		{
			// TÌM TỔNG SỐ RECORDS
			$total_records=$sodong;
			
			//  TÌM LIMIT VÀ CURRENT_PAGE
			$current_page = isset($_GET['page']) ? $_GET['page'] : 1; 
			$limit = 5;
			
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
				$i=$start + 1;
			
				echo "<center> <h3> Có $sodong sản phẩm </h3></center> ";
				#link them san pham
				echo '<a href ="index.php?hd=them " class="them" >Thêm Sản Phẩm</a>';
				
				echo '<table class="sp">';
				echo '<tr class="rowhead">';
				echo'
						<td> STT</td>
						<td>Mã sản phẩm</td>
						<td>Tên sản phẩm</td>
						<td>Ảnh</td>
						<td>Giá(triệu VND)</td>
						<td>Số lượng</td>
						<td>Trạng thái</td>
						<td>Sửa</td>							
						<td>Xóa</td>	
				';
				while ($row = mysqli_fetch_assoc($result))
				{
					$rowClass = '"row1"';
					if($i%2==0)
						$rowClass='"row2"';
					$trangthai = ($row['trangthai']==1)? "Hiện":"Ẩn";
					echo '<tr class='.$rowClass.' >';
					echo'
							<td>'.$i.'</td>
							<td><br>'.$row["ID"].'<br></td>
							<td><br>'.$row["tensp"].'<br></td>
							<td><img src="pic/dogs/'.$row["anh"].'"width="100" height="100"></td>
							<td><br>'.$row["gia"].'<br></td>
							<td><br>'.$row["soluong"].'<br></td>
							<td> '.$trangthai.'</td>
							<td> 
								<a href ="index.php?hd=sua&id='. $row['ID'].' ">Sửa</a>																
							</td>							
							<td> 
								<a href ="thuvien/sanpham/xuly_xoa1.php?id='. $row['ID'].' "onclick="return confirmAction()">Xóa</a>														
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