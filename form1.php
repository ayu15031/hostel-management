<?php
session_start();

	include('config.php');

	 if(isset($_GET["data"]))
    {
        $data = $_GET["data"];
    }
	
	
	
	$error="";
	if(isset($_POST['submit']))
	{
		$enroll = $_POST['enroll'];
		$roll=$_POST['roll'];
		
		if($enroll=="" && $roll=="")
		{
			$error="Plz enter atleast one field.";
		}
		
		else if($roll==""){
			
			if($data==1){
				
			}
			else if($data==2){
				
			}
			else if($data==3){
				
			}
			else if($data==4){
				
			}
			else if($data==5){
				$q= "select * from girls_details where enrollment_no = '$enroll'";
				$result = mysqli_query($con, $q);
				$num = mysqli_num_rows($result);
				
				if($num==0){
					$error="Invalid Data";
				}
				else{
					$row = mysqli_fetch_assoc($result);
					if($row['book_status']==1){
						$error="Seat already book for given credentials";
					}
					else{
					$_SESSION['roll_no']="";
					$_SESSION['enrollment_no']=$enroll;
					$_SESSION['Name']=$row['name'];
					$_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
					$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
					header('location:book/girls_book.php');
					}
				}
			}
			
		}
		
		else if($enroll==""){
			
			if($data==1){
				
			}
			else if($data==2){
				
			}
			else if($data==3){
				
			}
			else if($data==4){
				
			}
			else if($data==5){
				$q= "select * from girls_details where roll_no = '$roll'";
				$result = mysqli_query($con, $q);
				$num = mysqli_num_rows($result);
				
				if($num==0){
					$error="Invalid Data";
				}
				else{
					$row = mysqli_fetch_assoc($result);
					if($row['book_status']==1){
						$error="Seat already book for given credentials";
					}
					else{
					
					$_SESSION['roll_no']=$roll;
					$_SESSION['enrollment_no']=$row['enrollment_no'];
					$_SESSION['Name']=$row['name'];
					$_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
					$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
					header('location:book/girls_book.php');
				    }
				}
			}
			
		}
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/form1.css" rel="stylesheet">
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1 class="text-center" id="login">LOGIN</h1>
	</div>
	<p style="text-align:center; color:red;"><?php echo $error;?></p>
	<form action="" method="post">
		<div class="form-group">
			<input placeholder="Enrollment number" name="enroll" class="form-control" type="text" >
		</div>
		<p class="text-center" style="color:white;"  >OR</p>
		<div class="form-group">
			<input placeholder="Roll no." name="roll" class="form-control" type="text" >
		</div>
		<input type="submit" name="submit" value="">
	</form>
</body>
</html>