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
			include('thuvien/sanpham/lietke_sanpham1.php');
			
			if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['hd']))
			{
				switch($_GET['hd'])	
				{
						case 'them':
							include ('thuvien/sanpham/sp_them1.php');
							break;
							
						case 'sua':
							include ('thuvien/sanpham/sp_sua1.php');
							break;	
				}
			}
			else
			{
				$all_sql ="SELECT * FROM `tbl_danhmucsp1`";
				lietke_sp($all_sql,'index.php');	
			}
							
		?>	
		</div>
		
		<?php  			
			include('template/footer.php'); 			
		?>	
			
			
			
	</div><!--#wrapper-->


</html>