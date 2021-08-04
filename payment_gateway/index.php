<?php
include('config.php');
include('session.php');

$name= $_SESSION['Name'];
$room_no=$_SESSION['room_no'];
$seat_no=$_SESSION['seat_no'];
$enroll=$_SESSION['enrollment_no'];

if(isset($_POST['submit'])){
	$q= "select * from hostel_girls where room_no='$room_no' AND seat_no='$seat_no'";
	$result = mysqli_query($con, $q);
	$row = mysqli_fetch_assoc($result);
	if($row['book_status']==0){
	$email=$_POST['email'];
	$add=$_POST['add'];
	$mob=$_POST['mob'];
	$amount='Rs. 2000';
	
	
	$q="insert into payment_details values('$enroll','$name','$email','$add','$mob','$amount','$room_no','$seat_no')";
	mysqli_query($con,$q);
	
	//$q="update hostel_girls set book_status='1' where room_no='$room_no' AND seat_no='$seat_no'";
	//mysqli_query($con,$q);
	header('location:pay.php');
	}
	else{
		header('location:../book/girls_book.php');
	}
}
	
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="main.js"></script>
<title>Payment Form</title>
<link href="main.css" rel="stylesheet">
</head>

<body>
<div class="container">
  
<div class="stepwizard col-md-offset-3 col-sm-offset-3 col-xs-offset-3 ">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Step 1</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3 col-xs-6 col-sm-offset-3">
        <div class="col-md-12 col-sm-12 col-xs-12">
		  <div class="form-group">
            <label class="control-label">Enrollment no.</label>
            <input  name="enroll" maxlength="100" type="text" class="form-control" value="<?php echo $enroll?>" disabled/>
          </div>
          <div class="form-group">
            <label class="control-label">Name</label>
            <input  name="name" maxlength="100" type="text" class="form-control" value="<?php echo $name?>" disabled/>
          </div>
          <div class="form-group">
            <label class="control-label">Email</label>
            <input maxlength="100" name="email" type="text" required="required" class="form-control" placeholder="Enter Email" />
          </div>
		  <div class="form-group">
            <label class="control-label">Mobile number</label>
            <input size="10" type="number" name="mob" required="required" class="form-control" placeholder="Enter Contact no." />
          </div>
          <div class="form-group">
            <label class="control-label">Address</label>
            <textarea required="required" name="add" maxlength="500" class="form-control" placeholder="Enter your address" ></textarea>
          </div>
           <div class="form-group">
		  
            <label class="control-label">Amount</label>
            <input type="text" class="form-control" name="amount" value="Rs. 2000" disabled/>
          </div>
		  <div class="form-group">
            <label class="control-label">Room no.</label>
            <input type="text" class="form-control" name="room" value="<?php echo $room_no?>" disabled/>
			 </div>
		  
		  <div class="form-group">
		  <label class="control-label">Seat no.</label>
            <input type=text" class="form-control" name="seat" value="<?php echo $seat_no?>" disabled/>
          </div>
	
          <button name="submit" class="btn btn-primary nextBtn btn-lg pull-right" type="submit" >Next</button>
        </div>
      </div>
    </div>
    
  </form>
  
</div>
</body>
</html>