<?php

session_start();


	$username = $_POST['username'];
	$password = $_POST['password'];
	

	if($username == "" && $password == ""){
		
		echo ("<script> alert('Field Canot Be empty'); </script>");
		echo ("Try <a href='index.php'>Again </a>");
		
	}
	else{
		$connection = mysqli_connect('localhost','root', '', 'Post');
		$auth = "select username ,passwordd from usermaster where username = '$username' and passwordd ='$password'";
		$result = mysqli_query($connection, $auth);
		if(mysqli_num_rows($result) == 1){
		$_SESSION['username']=$username;
		header('Location: welcome.php');
		}else{
			
			echo ("Invalid Username And Password Try <a href='index.php'>Again </a>");			
}

}



?>