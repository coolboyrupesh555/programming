<!---
	This Thing Is made by Rupesh Rajbhar 
	Open Source 
	Email: Rajbharrupesh2@gmail.com
	css(bootstrap )having some problem
	not working Proper in diffrence resolution
-->
<?php
session_start();
$connection = mysqli_connect('localhost','root', '','Post' );
 
$msg = "";

	if (isset($_POST['status'])){
		$target = "images/".basename($_FILES['img']['name']);

		$usermind = $_POST['usermind'];
		$image = $_FILES['img']['name'];
		$whoposted = $_SESSION['username'];
		//$image_text = mysqli_real_escape_string($db, $_POST['image_text']);


		$sql = "INSERT INTO Wall (photo, commentt,username) VALUES ('$image', '$usermind','$whoposted')";
		mysqli_query($connection, $sql);

		if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
			
		}else{
			$msg = "Failed to upload image";
		}
	}else{
			echo("input the status");
	}

	header('Location: welcome.php');


?>