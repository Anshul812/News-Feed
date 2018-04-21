



<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
		body{
		background-color: lightGray;
		background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
		}
		
		.container{
			border:3px Solid Gray;
			padding : 100px;
			margin-left : 250px;
			width: 50%;
		}
		h2{
			margin-left:550px;
			font-family:"Comic Sans MS", cursive, sans-serif;
		}
		
		</style>

</head>
<body>
 <h2>Third Eye</h2>
<div class="container">
<div class="row">
 
<div class="col-md-8">
<form name="contact-form" action="contact.php" method="post" >
<h1>Contact Form</h1>
<div class="form-group">
<label for="name">Name</label>
<input type="text" class="form-control" name="name" placeholder="Name" required>
</div>
<div class="form-group">
<label for="email">Email address</label>
<input type="email" class="form-control" name="email" placeholder="Email" required>
</div>

<div class="form-group">
<label for="message">Comments</label>
<textarea name="message" class="form-control" rows="3" cols="28" rows="5" placeholder="Message"></textarea> 
</div>
 
<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
</form>
 

</div>
</div>


</body>
</html>

<?php
	session_start();
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "sole";
 
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email'])&& $_POST['email'] !=''))
{
$yourName = $conn->real_escape_string($_POST['name']);
$yourEmail = $conn->real_escape_string($_POST['email']);
$comments = $conn->real_escape_string($_POST['message']);
 
$sql="INSERT INTO contactus (name, email, message) VALUES ('".$yourName."','".$yourEmail."', '".$comments."')";
 
 
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon . Message has been reached." ;
}
}
else
{
echo "Please fill Name and Email";
}
?>