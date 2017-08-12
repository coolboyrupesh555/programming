<?php

$connection = mysqli_connect('localhost','root','','Post');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['fname'];


if($username == "" && $password == ""){
	echo "Field Cannot Be Empty <a href='singup.php'>Try Again </a> ";
}else{

if(isset($_POST['register'])){

	$check = "select username,email from usermaster where username = '$username' and email = '$email'";
	$result = mysqli_query($connection, $check);

	if(mysqli_num_rows($result) == 1){

		echo "username alredy exits <a href='singup.php'>Try Again </a>";
	}else{
		$insert = "insert into usermaster (username,passwordd,email,name)values('$username','$password','$email','$name')";
		mysqli_query($connection,$insert);
		header('Location: index.php');
	}
	
}
}
?>