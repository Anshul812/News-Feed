

<!DOCKTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		body{
		background-image: url("./image/black.jpg");
		background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
		}
		.contain{
		font-family: "Comic Sans MS", cursive, sans-serif;
		color: white;
		margin-left: 10px;
		}
		h1 {
			margin-left: 140px;
			margin-top: 50px;
		}
		.btn-group{
		position: absolute;
		top:50px;
		right:150px;
		}
		h3{
			margin-left: 140px;
			margin-top: 50px;
			color: white;
		}
		
		
		#btn-group{
			
			position: absolute;
			margin-left : 80px;
			margin-top: 10px;
			
		}
		.content{
			position :absolute;
			margin-left: 530px;
			
		}
		h2{
			color:white;
			font-family:"Comic Sans MS", cursive, sans-serif;
		}
		p{
			margin-left: 300px;
			margin-top: 30px;
		}
.template_container {
    width: 40%;
    height: auto;
    border-top: 1px solid #e8e8e8;
    margin: 240px 825px 25px auto;
    padding-top: 25px;
	
}

.template_container ul li { 
    list-style-type: none; 
    display: inline; 
    text-align: center;
    zoom:1; 
    *display:inline;
}

.template_container ul { vertical-align: inherit; }
.template_container li { margin-left: 25px;}
.template_container img { 
    width: 180px;
    margin-bottom: 50px; 
   
}

a.caption { 
    position: relative !important;
}
a.caption span { 
    background: #000; 
    background: rgba(0,0,0,0.8); 
    color: white !important; 
    display: none; 
    padding: 5px 10px !important; 
    text-align: center; 
    position: absolute !important;
    bottom: 0 !important; 
    left: 0 !important; 
}
a.caption:hover {
    text-decoration: none;
}


		
	</style>
	
</head>
	
<body>
	<div class ="contain">
		<h1>THIRD EYE</h1>
		<div class="btn-group">
			<a href="http://localhost/index.php"  style="background-color:white" class="btn">HOME</a>
			<a href="services.html" style="background-color:white" class="btn">SERVICES</a>
			<a href="http://localhost/login.php" style="background-color:white" class="btn">SIGN IN</a>
			<a href="http://localhost/regisr.php"  style="background-color:white" class="btn">REGISTER</a>
			<a href="http://localhost/contact.php"  style="background-color:white" class="btn">CONTACT</a>
			
			</div>
			</div>
	<div id="btn-group">
	<a href="world.html"  style="background-color:white" class="btn">World</a><br /><br/>
	<a href="entertainment.html" style="background-color:white" class="btn">Entertainment</a>
	<a href="india.html" style="background-color:white" class="btn">India</a><br/><br/>
	<a href="sports.html"  style="background-color:white" class="btn">Sports</a>
	<a href="technology.html"  style="background-color:white" class="btn">Technology</a>
	<a href="health.html"  style="background-color:white" class="btn">Health</a><br/>

</div>




     <div class="content">
	 <!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="75487/"></script> <!-- end feedwind code -->
	 <!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="75476/"></script> <!-- end feedwind code -->
	 <!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="75478/"></script> <!-- end feedwind code -->
	 <!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="75481/"></script> <!-- end feedwind code -->
	 <!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="75482/"></script> <!-- end feedwind code -->
	 <!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="75485/"></script> <!-- end feedwind code -->
	 <!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="75486/"></script> <!-- end feedwind code -->
	 
	 
	 </div>
	 
	 <div class="template_container"> 
	 <h4 style="color:lightGray">News from our users!!</h4>
    <ul >
<?php
// Include the database configuration file
include 'dbconfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'image/'.$row["file_name"];
?>
<a target="_blank" href="<?php echo $imageURL; ?>" alt="">
 
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>

</ul>
</div> 

	 
	
</body>

</html>