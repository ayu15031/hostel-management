<?php
include'config.php';
include'session.php';
$result1="";
$row1="";
$roll="";
$room="";
$seat="";
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
		$roll = $_POST['roll_no'];
		$seat = $_POST['seat_no'];
		$room = $_POST['room_no'];
		$q="select * from girls_details where roll_no='$roll'";
		$result = mysqli_query($con, $q);
		$row = mysqli_fetch_assoc($result);
		$num = mysqli_num_rows($result);
	    if($num==0){
			$error="Incorrect roll no.";
		}
		else{
				$q="select * from ".$table." where book_status = '1' and roll_no='$roll'" ;
				$result = mysqli_query($con, $q);
				$row = mysqli_fetch_assoc($result);
				$num = mysqli_num_rows($result);
				$q1="select * from ".$table1." where seat_no='$seat' and room_no='$room'" ;
				$result1 = mysqli_query($con, $q1);
				$row1 = mysqli_fetch_assoc($result1);
				if($num==0){
					$error="Student not yet registered.";
				}
				else if($row1['book_status']==0){
					$error="Seat already empty";
				}
				else{
					$q="select * from ".$table." where book_status = '1' and roll_no='$roll' and room_no='$room' and seat_no='$seat'" ;
					$result= mysqli_query($con, $q);
					$row = mysqli_fetch_assoc($result);
					$num = mysqli_num_rows($result);
					if($num==0){
						$error="Wrong room entered";
					}
					else{
					$q="update ".$table." set seat_no='', room_no='', book_status='0' where book_status = '1' and roll_no='$roll' and room_no='$room' and seat_no='$seat'" ;
					mysqli_query($con, $q);
					$q="update ".$table1." set book_status='0' where seat_no='$seat' and room_no='$room'";
					mysqli_query($con, $q);
					$success="Student removed successfully";
					}
				}
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
                      <a href="javascript:;" class="active">
                          <i class="fa fa-edit"></i>
                          <span>Edit</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="insert_student.php" >Add Student</a></li>
                          <li><a  href="remove_student.php" class="active">Remove Student</a></li>
                          <li><a  href="update_student.php">Update Student</a></li>
                      </ul>
                  </li>
                 
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Edit Profile</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="password.php">Change Password</a></li>
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
		 <div class="row">
		 <div class="col-md-4">
		 </div>
		 <div class="col-md-4">
		 
		 <form method="post" style="margin-top:30px; margin-left:auto; margin-right:auto;">
				<div class="form-group">
				<label for="roll">Roll no. :</label>
				<input type="text" name="roll_no" value="<?php echo $roll;?>" required="required" class="form-control" id="roll_no">
				</div>
				<div class="form-group">
				<label >Room no. :</label>
				<input type="text" name="room_no" value="<?php echo $room;?>" required="required" class="form-control" id="room_no">
				</div>
				<div class="form-group">
				<label >Seat no. :</label>
				<input type="text" name="seat_no" value="<?php echo $seat;?>" required="required" class="form-control" id="seat_no">
				</div>
				<button type="submit" name="submit" class="btn btn-default">Remove Student</button>
		  </form>
		  </div>
		  </div>
		  <p style="color:red; text-align:center;  margin-top:20px;"><?php echo $error;?></p>
		   <p style="color:green; text-align:center;"><?php echo $success;?></p>
		 
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
