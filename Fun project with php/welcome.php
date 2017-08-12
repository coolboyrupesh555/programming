<?php session_start();
if(!isset($_SESSION['username'])){
	header('Location: index.php');
}
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">	
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<title> Login </title>
		</head>
			<body style="width: 100%; height: 100%; min-width: 1000px; min-height: 1000px; background-color: #c1e1ec;">
				<ul class="nav justify-content-end">
				  <li class="nav-item">
				    <a class="nav-link active" href="#">Home</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Profile</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Account</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="logout.php">Logout</a>
				  </li>
				</ul>
				<!-- image container for profile image i willl use later 
				<div class="text-center">
  					<img src="profile.jpg" class="rounded" alt="..." height="120" style="text-align: left;"> 
				</div>
				-->
				<div class="status" style="margin-left: -70px;">
				<form action="post.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
				    <textarea name ="usermind" class="form-control" id="exampleTextarea" rows="3" style="margin-left: 37%; width: 343px; height: 86px;" placeholder="What's in Your Mind...?"></textarea>
 				 	<input type="file" name="img" style="margin-left: 37%;">
 				 <input type="submit" name="status" value="Post"class="btn btn-outline-info" style="margin-left: -42px; width: 81px;">
 				 </div>
 				</form>
 			</div>
 				<?php

				$connection = mysqli_connect('localhost','root','','Post');

				$fetch = "select username,photo,commentt from Wall ;";

				$result = mysqli_query($connection,$fetch);

				while($rows = mysqli_fetch_array($result)){
					echo "<p style='font-family: Comfortaa, cursive; margin-left: 38%; margin-top: 6px;'> User:".$rows['username']."</p>";
					echo "<p style=' font-family: Comfortaa, cursive;margin-left: 38%; margin-top: -11px;'> Status:".$rows['commentt']."</p>";	
					echo "<img rotate='120' src='images/".$rows['photo']."' style='height:198px; width: 339px; margin-left: 34%; margin-top: -5px; ' />" ;
				}
				?>
			</body>
</html>