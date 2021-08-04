<?php
include('config.php');
include('session.php');

$name= $_SESSION['Name'];
if (($_SESSION['start']) && (time() - $_SESSION['start'] > 1800)) {
    // last request was more than 30 minutes ago
    // unset $_SESSION variable for the run-time 
    session_destroy();   
	header('location:../form1.php');// destroy session data in storage
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hostel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/book.css" rel="stylesheet">
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
<script>
$(document).ready(function(){
	$("#floor1").click(function(){
		$("#b").hide();
		$("#a").show();
	});
});

$(document).ready(function(){
	$("#floor2").click(function(){
		$("#a").hide();
		$("#b").show();
	});
});


	/*$(document).ready(function(){
$('.box1').click(function(){
$('.box1').removeClass("activa");
$(this).addClass("activa");
}
)})*/




	


</script>

<style>
.activa{
	background-color:#A9A9A9;
	pointer-events:none;
}
.bed-style{
	background-color:transparent;
	border:none;
}

.bed-style:hover{
		text-shadow: 10px 10px 15px rgba(73, 78, 92, 0.1);
}

</style>

</head>
<body>

	<header>
		<div class="container-fluid topbar">
			<p class="top"><span><i class="fa fa-phone"></i></span><i> +91 9876543210 </i><span><i class="fa fa-envelope"></span></i> <i>warden@email.com</i></p>
		</div>
		
		<div class="container-fluid topbar2"style="width:100%;" >
			<h1>WELCOME <span><?php echo $name;?></span></h1>
		</div>
		<div class="container-fluid" style="margin:0; padding:0; ">
			<img src="images/nit.jpg" style="width:100%; margin:0; padding:0;height:60vh;"/>
		</div>
	</header>
