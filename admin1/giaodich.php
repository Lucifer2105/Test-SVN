<html>
<head>
	<title> Quản trị nội dung wedsite </title>
	<link rel ="stylesheet" type ="text/css" href ="css/style.css">
	<link rel ="stylesheet" type ="text/css" href ="css/style_content.css">
	<SCRIPT LANGUAGE="JavaScript">
		function confirmAction() {
		  return confirm("Bạn chắc chắn xóa?")
		}
	</SCRIPT>
</head>
<body>
</body>
<?php 
	session_start();
	if(!isset($_SESSION['dangnhap'])){
		header('location:login.php');
	}

?>
	<div class ="wrapper">
		<?php  
			include('template/banner.php'); 					
		?>	
		
		<div class="content">
		<?php  			
			include('thuvien/giaodich/lietke_giaodich.php');
			if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['hd']))
			{
				switch($_GET['hd'])	
				{							
						case 'sua':
							include ('thuvien/giaodich/gd_sua.php');
							break;	
				}
			}
			else
			{
				$all_sql ="SELECT * FROM `tbl_giaodich` ORDER BY `ngay_giaodich` DESC";
				lietke_gd($all_sql,'giaodinh.php');		
			}
						
		?>	
		</div>
		
		<?php  			
			include('template/footer.php'); 			
		?>	
			
			
			
	</div><!--#wrapper-->


</html>