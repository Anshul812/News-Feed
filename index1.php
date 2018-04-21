<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	body{
		background-image: url("./image/black.jpg");
	}
	h2{
		color:white;
		font-family:"Comic Sans MS", cursive, sans-serif;
		margin-left: 540px;
	}
	</style>
</head>
<body>
<h2>Third Eye</h2>
<div class="header">
	<h3>Home Page</h3>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
	
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<div class="btn-group">
  	  <a href="http://localhost/upload.php"  style="margin-left:250px" type="submit" class="btn" name="reg_user">Upload</a>
  	</div>
    	<p> <a href="index1.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>


		
</body>
</html>