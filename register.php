<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost','root','','mydb');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	IF($_POST['password'] == $_POST['confirmpassword']) {
		
		$username = $mysqli->real_escape_string($_POST['username']);
		$email = $mysqli->real_escape_string($_POST['email']);
		
		$password = md5($_POST['password']);
		
		$sql = "INSERT INTO mydb(username, email,password)" . "VALUES('$username','$email','$password')";
		
		if($mysqli ->query ($sql) === true) {
			$_SESSION['message'] = 'Registration Successful';
			header("location: welcome.php");
		}
		else{
			$_SESSION['message'] = 'User not addaed to the database';
			 
		}
	}
	else{
		$_SESSION['message'] = "Two password do not match";
	}
}
?>


<html>
<head>
<style>
body{
		background-image: url("./image/black.jpg");
		background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
		}
		
	#text,#pwd,#email{
			padding:5px;
			margin: center;
	}		
	.container{
		margin-left: 540px;
		margin-top: 125px;
		color: lightGray;
	}
	
	.reg{
		margin-left:540px;
		color:lightGray;
		font-family:"Comic Sans MS", cursive, sans-serif;
		
	}
	h1{
		color: white;
		font-family: "Comic Sans MS", cursive, sans-serif;
		margin-left:530px;
	}
</style>
</head>
<body>
<h1>Third Eye</h1>
<div class="reg">
<h2>REGISTER</h2>
</div>
<div class="container">
<form class="form" action="register.php" method="post" enctype="multipart/form-data" autocomplete="off" >

  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
	
	<div class="input-group">
  		<label>Email</label>
  		<input type="email" name="email" >
  	</div>
	
	
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
	
	<div class="input-group">
  		<label>Confirm Password</label>
  		<input type="password" name="confirmpassword" >
  	</div>
	
  	<div class="input-group">
  		<button type="submit" class="btn" >Register</button>
  	</div>
	
  </form>
  <div>





</html>