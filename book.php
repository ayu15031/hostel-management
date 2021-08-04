

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
		$("#2").hide();
		$("#1").show();
	});
});

$(document).ready(function(){
	$("#floor2").click(function(){
		$("#1").hide();
		$("#2").show();
	});
});
</script>

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
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2>GIRLS HOSTEL</h2>
				<p style="text-align:center; margin-top:20px;">Select your bed in the room</p>
				<p style="text-align:center; margin-top:20px;"><span><i class="fa fa-bed" style="color:#50d8af; font-size:25px;"></i></span> : Available</p>
				<p style="text-align:center; margin-top:20px;"><span><i class="fa fa-bed" style="color:#A9A9A9; font-size:25px;"></i></span> : Not Available</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3" style="text-align:center"><button type="button" class="box" id="floor1">FLOOR 1</button></div>
				<div class="col-md-3" style="text-align:center"><button type="button" class="box" id="floor2">FLOOR 2</button></div>
				<div class="col-md-3"></div>
			</div>
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						 <div class="panel-body" id="1" >
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"  style="text-align:center">
									<button class="box1" onClick="window.location='#bed'">207</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button class="box1" onClick="window.location='#bed'">208</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button class="box1" onClick="window.location='#bed'">206</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"  style="text-align:center">
									<button class="box1">209</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" onClick="window.location='#bed'">
									<button class="box1"onClick="window.location='#bed'">205</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button class="box1"onClick="window.location='#bed'">210</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button class="box1"onClick="window.location='#bed'">204</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button class="box1"onClick="window.location='#bed'">211</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center">
									<button class="box1" onClick="window.location='#bed'">203</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button class="box1"onClick="window.location='#bed'">212</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button class="box1"onClick="window.location='#bed'">202</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center">
									<button class="box1" onClick="window.location='#bed'">213</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button class="box1"onClick="window.location='#bed'">201</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center; height:50px">
									
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center">
									
								</div>
							
							</div>
							</div>
							<div class="panel-body"  id="2" style="display:none"  >
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"  style="text-align:center">
									<button class="box1"onClick="window.location='#bed'">306</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center">
									<button class="box1" onClick="window.location='#bed'">307</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button class="box1"onClick="window.location='#bed'">305</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"  style="text-align:center">
									<button class="box1"onClick="window.location='#bed'">308</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button class="box1"onClick="window.location='#bed'">304</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center">
									<button class="box1" onClick="window.location='#bed'">309</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;" >
									<button class="box1"onClick="window.location='#bed'">303</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;" >
									<button class="box1"onClick="window.location='#bed'">310</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;" >
									<button class="box1"onClick="window.location='#bed'">302</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;" >
									<button onClick="window.location='#bed'" class="box1">311</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;" >
									<button onClick="window.location='#bed'" class="box1">301</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;" >
									<button onClick="window.location='#bed'" class="box1">312</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;">
									
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;">
									<button class="box1" onClick="window.location='#bed'">313</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center">
									
								</div>
							</div>
							</div>
					</div>
				</div>
				<div class="col-md-4">
				</div>
				</div>
				<div class="row">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
					<div class="panel panel-default" id="bed">
					<div class="panel-body">
						<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center">
						<a href="#"><i class="fa fa-bed" style="color:#50d8af; font-size:40px;"></i></a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center">
						<a href="#"><i class="fa fa-bed" style="color:#50d8af; font-size:40px;"></i></a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center">
						<a href="#"><i class="fa fa-bed" style="color:#50d8af; font-size:40px;"></i></a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center">
						<a href="#"><i class="fa fa-bed" style="color:#50d8af; font-size:40px;"></i></a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center">
						<a href="#"><i class="fa fa-bed" style="color:#50d8af; font-size:40px;"></i></a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center">
						<a href="#"><i class="fa fa-bed" style="color:#50d8af; font-size:40px;"></i></a>
						</div>
						</div>
					</div>
					</div>
					</div>
					<div class="col-md-4">
					</div>
				</div>
			</div>

	</section>
	
	<footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Hostel</strong>. All Rights Reserved
      </div>
    </div>
  </footer>
</body>
</html>