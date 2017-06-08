<?php 
	include('../thuvien/config.php');
	session_start();
	if(isset ($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from admin where username='$username'and password='$password'";
		$query=mysqli_query($conn,$sql);
		$nums=mysqli_num_rows($query);
		if($nums>0){
			$_SESSION['dangnhap']=$username;			
			header('location:index.php');
		}else{			
			header('location:login.php');
		}
	}

?>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>ĐĂNG NHẬP</title>
		<style>
			table{
				border:2px solid;
				border-collapse:collapse;
				margin-top:50px;
			}
		
		</style>
	
	</head>
	<body>
	<form action="" method="post">

			<center>
			<table width="200" cellspacing="5px" cellpadding="10px"  >
				<tr>
					<td colspan="2"><div align="center">Login</div></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" size="20"></td>	
					
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" size="20"></td>
				</tr>
				<tr>
					<td colspan="2">
					<div align="center">
						<input type="submit" name="login" id="button" Value="Login">
						<input type="reset" name="cance" id="button" value="Cancel">
					</div>		
					</td>
					
				</tr>
				
			</table>
			</center>
		</form>
	
	</body>	
</html>