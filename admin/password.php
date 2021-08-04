<?php
include'config.php';
include'session.php';
$error="";
$success="";

	$uname=$_SESSION['uname'];
	$q= "select * from admin_login where username = '$uname'";
	$result = mysqli_query($con, $q);
	$row = mysqli_fetch_assoc($result);
	if($row['id']==1){
		$q="select * from girls_details";
		$result = mysqli_query($con, $q);
		$table="girls_details";
		$table1="hostel_girls";
	}
	else if($row['id']==2){
	
	}
	else if($row['id']==3){
	
	}
	else if($row['id']==4){
	
	}
	else if($row['id']==5){
	
	}
	else{
		
	}
	
	if(isset($_POST['submit'])){
		$q1="select * from admin_login where username = '$uname'";
		$result1 = mysqli_query($con, $q1);
		$row1 = mysqli_fetch_assoc($result1);
		$old=$_POST['old'];
		$new1=$_POST['new1'];
		$new2=$_POST['new2'];
		if($old==$row1['password']){
			if($new1==$new2){
				$q2="update admin_login set password='$new1' where username = '$uname'";
				 mysqli_query($con, $q2);
				 $success="Password changed successfully";
			}
			else{
				$error="new passwords do not match";
			}
		}
		else{
			$error="Wrong old password";
		}
	}
	
	$q2="select * from admin_login where username = '$uname'";
$result2 = mysqli_query($con, $q2);
$row2 = mysqli_fetch_assoc($result2);
$src=$row2['img_src'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

   
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><img src="images/nit.png"  height="50px" width="200px" style="padding-bottom:13px; padding-top:0;"></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo $src;?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Sneha Chauhan</h5>
              	  	
                  <li class="mt">
                      <a href="index.php" >
                          <i class="fa fa-home"></i>
                          <span>All students</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-eye"></i>
                          <span>View Hostelers</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="all_students.php" >All students</a></li>
                          <li><a  href="roll_students.php" >Students by Roll no.</a></li>
						  <li><a  href="payment_details.php">Payment Details</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-edit"></i>
                          <span>Edit</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="insert_student.php">Add Student</a></li>
                          <li><a  href="remove_student.php">Remove Student</a></li>
                          <li><a  href="update_student.php">Update Student</a></li>
                      </ul>
                  </li>
                 
                  <li class="sub-menu">
                      <a href="javascript:;"  class="active">
                          <i class="fa fa-user"></i>
                          <span>Edit Profile</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="password.php"  class="active">Change Password</a></li>
						  <li><a  href="pic_upload.php">Change profile picture</a></li>
                      </ul>
                  </li>
            
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
         <section class="wrapper">
		 <div class="container">
		 <div class="row">
		 <div class="col-md-4">
		 </div>
		 <div class="col-md-4">
		 <form method="post" style="margin-top:30px; margin-left:auto; margin-right:auto;">
				<div class="form-group">
				<label>OLD PASSWORD :</label>
				<input type="password" name="old"  required="required" class="form-control" >
				</div>
				<div class="form-group">
				<label >NEW PASSWORD :</label>
				<input type="password" name="new1" required="required" class="form-control">
				</div>
				<div class="form-group">
				<label >RE-ENTER NEW PASSWORD :</label>
				<input type="password" name="new2"  required="required" class="form-control">
				</div>
				<button type="submit" name="submit" class="btn btn-default">Change Password</button>
		  </form>
		  </div>
		  </div>
		  <p style="color:red; text-align:center;  margin-top:20px;"><?php echo $error;?></p>
		  <p style="color:green; text-align:center;"><?php echo $success;?></p>
		 </div>
		 </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style=" position: fixed; bottom: 0; width:100%;">
          <div class="text-center">
              &copy; Copyright <strong>Hostel</strong>. All Rights Reserved
              <a href="basic_table.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
