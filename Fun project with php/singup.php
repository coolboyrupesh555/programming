<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>!Register</title>
	</head>
		<body style="background-color: #3C6478;width: 100%; height: 100%; min-width: 1000px; min-height: 1000px;">
			<div class="form-group">
				<form class="form-inline" style="margin-left: 41%;" action="register.php" method="post">
					<div class="container">
					<input type="text" placeholder="Enter Name" class="form-control" name="fname" name="fname" style="margin-top: 175px; margin-bottom: 18px;"><br>
					<input type="text" placeholder=" Username" class="form-control" name="username" style="margin-bottom: 18px;"><br>
					<input type="email" placeholder="Enter Email" class="form-control" name="email" style="margin-bottom: 18px;"><br>
					<input type="password" placeholder="Password" class="form-control" name="password" style="margin-bottom: 18px;"><br>
					<input type="submit" value="Register" name="register" class="btn btn-success" style="margin-bottom: 18px; margin-left: 52px; width: 107px;">
				</form>
				<p style="color: white;">  Alredy Have Account<a href="index.php" style="text-decoration: none;">Login </a></p>
			</div>


		</body>	
</html>