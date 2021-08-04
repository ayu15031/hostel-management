<?php
include('config.php');
include('session.php');
$error="";
if(isset($_POST['submit'])){
	$uname=$_POST['name'];
	$pass=$_POST['pass'];
	$q= "select * from admin_login where username = '$uname' and password='$pass'";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);
	if($num==0){
					$error="Invalid Username or Password";
				}
	else{
		$row = mysqli_fetch_assoc($result);
		$_SESSION['uname']=$uname;
		header('location:index.php');
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
	<style>
	#pass{
    outline: none;
    padding: 20px 10px 20px 10px;
    border: none;
    margin: 0 0 15px 0;
    background: none;
    border-bottom: 2px solid #eee;
    width: 20%;
    color: white;
	font-family: 'Open Sans', sans-serif;
	margin-left: auto;
    margin-right: auto;
	font-size: 1.1em;
	font-weight: 600;
	min-width:200px;
}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="text-center" id="login">LOGIN</h1>
	</div>
	<p style="text-align:center; color:red;"><?php echo $error;?></p>
	<form action="" method="post">
		<div class="form-group">
			<input placeholder="Username" name="name" required="required" class="form-control" type="text" >
		</div>
		<div class="form-group">
			<input id="pass" placeholder="Password" name="pass" required="required" class="form-control" type="password"> 
		</div>
		<input type="submit" name="submit" value="">
	</form>
</body>
</html>