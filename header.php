<?php
include('config.php');
function login($i){
	
	if($i==1){
		$_SESSION['login']= $i;
		header('location:form1.php');
	}
	
	 else if($i==2){
		$_SESSION['login']= $i;
		header('location:form1.php');
	}
	
	else{
		echo "<script>alert($i)</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hostel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
	<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style>
	</style>
	<script>
		$(document).ready(function(){
		$('ul li').click(function(){
		$('li').removeClass("active");
		$(this).addClass("active");
		}
		)})
	</script>
</head>
<body id="body">
	
<header id="header">
	<nav class="navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="#"><img src="images/nit.png"  height="50px" width="200px"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			
			  <ul class="nav navbar-nav navbar-right menu-design">
				  <li class="active"><a href="#body">Home</a></li>
				  <li><a href="#services">Services</a></li>
				  <li><a href="#team">Management</a></li>
				  <li><a href="#gallery">Gallery</a></li>
				  <li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Booking<span class="caret"></span></a>
						  <ul class="dropdown-menu">
							  <li><a href="form1.php?data=1" target="_blank" >First Year Boys</a></li>
							  <li><a href="form1.php?data=2" target="_blank" >Second Year Boys</a></li>
							  <li><a href="form1.php?data=3" target="_blank">Third Year Boys</a></li>
							  <li><a href="form1.php?data=4" target="_blank">Fourth Year Boys</a></li>
							  <li><a href="form1.php?data=5" target="_blank">Girls</a></li>
						  </ul>
				  </li>
                  <li><a href="#contact">Contact</a></li>
				  <li><a href="admin/form2.php" target="_blank">Admin Login</a></li>
             </ul>
			
		   </div>
		</div>
	</nav>
</header>