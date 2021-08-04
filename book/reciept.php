<?php
	include('session.php');
	include('config.php');
	if (($_SESSION['start']) && (time() - $_SESSION['start'] > 1800)) {
    // last request was more than 30 minutes ago
    // unset $_SESSION variable for the run-time 
    session_destroy();  
    header('location:../form1.php');	// destroy session data in storage
}
	$enroll= $_SESSION['enrollment_no'];
	$room_no=$_SESSION['room_no'];
    $seat_no=$_SESSION['seat_no'];
	
	$q="update hostel_girls set book_status='1' where room_no='$room_no' AND seat_no='$seat_no'";
	mysqli_query($con,$q);
	$q="update girls_details set room_no='$room_no', seat_no='$seat_no', book_status='1' where enrollment_no='$enroll'";
	mysqli_query($con,$q);
	$q="select * from girls_details where enrollment_no='$enroll'" ;
	$result = mysqli_query($con, $q);
	$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
	<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<style>
	.logout{
		color: #f2f2f2;
	font-size: 12px;
	border-radius: 4px;
	-webkit-border-radius: 4px;
	border: 1px solid #64c3c2 !important;
	padding: 5px 15px;
	margin-right: 15px;
	background: 	#303030;
	margin-top: 15px;
	}
	.logout:hover{
		transition:0.5s;
		background: white;
		color:black;
	}
	</style>
</head>
<body>
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<h1 style="text-align:center">RECIEPT</h1>
<table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>LABEL</th>
                            <th>DESCRIPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-3">NAME</td>
                            <td class="col-md-3"><?php echo $row['name']?></td>
                        </tr>
                        <tr>
                            <td class="col-md-3">ROLL NO.</td>
                            <td class="col-md-3"><?php echo $row['roll_no']?></td>
                        </tr>
                        <tr>
                            <td class="col-md-3">ENROLLMENT NO.</td>
                            <td class="col-md-3"><?php echo $row['enrollment_no']?></td>
                        </tr>
						<tr>
                            <td class="col-md-3">AMOUNT PAID</td>
                            <td class="col-md-3"><i class="fa fa-inr"></i> 2000/-</td>
                        </tr>
						<tr>
                            <td class="col-md-3">ROOM NO.</td>
                            <td class="col-md-3"><?php echo $row['room_no']?></td>
                        </tr>
						<tr>
                            <td class="col-md-3">SEAT NO.</td>
                            <td class="col-md-3"><?php echo $row['seat_no']?></td>
                        </tr>
					</tbody>
</table>
</div>
</div>
<div class="row">
<div class="col-md-3">

</div>
<div class="col-md-3">
<button class="logout"><a href="logout.php" style="text-decoration:none; color:white;">LOGOUT</a></button>
</div>
<div class="col-md-3">
<button class="logout pull-right"><a href="pdf.php" target="_blank" style="text-decoration:none;color:white;">DOWNLOAD PDF</a></button>
</div>
<div class="col-md-3">
</div>
</div>
</body>
</html>