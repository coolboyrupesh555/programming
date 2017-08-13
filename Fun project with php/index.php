<!---
	This Thing Is made by Rupesh Rajbhar 
	Open Source 
	Email: Rajbharrupesh2@gmail.com
	css(bootstrap )having some problem
	not working Proper in Different resolution
	media css query is not working properly	
-->
<?php session_start();
if(isset($_SESSION['username'])){
	header('Location: welcome.php');
}
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title> This Works</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
		<body style="background-color:#F6F6F6; width: 100%; height: 100%; min-width: 1000px; min-height: 1000px;">
			<div class="form-group row">
				<form class="form-inline" action="login.php" method="post">
					<div class="container">
						<div style="margin-left: 252%; margin-top: 94%;">
					<input type="text" name="username" placeholder="Username" class="form-control" style="margin-top: 15px; margin-bottom: 15px;"><br>
					<input type="password" name="password" placeholder="And Password" class="form-control"><br>	
					<input type="submit" name = "login" value="Login" class="btn btn-info" style="margin-top: 15px;">
						</div>
					</div>
				</form>
		</div>
			<div style="margin-left: 558px; margin-top: 22px;">
			<p> Don't have Account ? <a href="singup.php" style="text-decoration: none;">Signup </a></p>
		</div>
		</body>
</html>
