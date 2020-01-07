<?php
session_start();
if ( isset($_SESSION['email'])) {

	header('Location: admin.php');
}
if(isset($_POST['login'])){
	define('EMAIL', 'admin@gmail.com');
	define('PASSWORD', '12345');
	$email=$_POST['email'];
	$password=$_POST['password'];

	if ( $email==EMAIL ) {
		if($password==PASSWORD){
			$_SESSION['email']=$email;
			header("Location:admin.php");

		}else{
			echo "Password Not Match";
		}
	}else{
		echo "Email Not Match";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="login-box">
   	 <form action="" method="POST">
    <input type="email" placeholder="Email Address" 
    name="email" required="">
    <input type="password" placeholder="Password" name="password" required="">
    <input type="submit" value="Login" name="login">
    </form>
   </div>
</body>
</html>
