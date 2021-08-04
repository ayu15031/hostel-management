<?php
include'config.php';
include'session.php';
	$uname=$_SESSION['uname'];
	$q= "select * from admin_login where username = '$uname'";
	$result = mysqli_query($con, $q);
	$row = mysqli_fetch_assoc($result);
	if($row['id']==1){
		$q="select * from girls_details";
		$result = mysqli_query($con, $q);
		
	}
	else if($row['id']==2){
	
	}
	else if($row['id']==3){
	
	}
	else if($row['id']==4){
	
	}
	else if($row['id']==5){
	
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
              	  <h5 class="centered"><?php echo $uname;?></h5>
              	  	
                  <li class="mt">
                      <a href="index.php" class="active">
                          <i class="fa fa-home"></i>
                          <span>All students</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-eye"></i>
                          <span>View Hostelers</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="all_students.php">All students</a></li>
                          <li><a  href="roll_students.php">Students by Roll no.</a></li>
						  <li><a  href="payment_details.php">Payment Details</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
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
		  <table class="table table-striped" style="margin-top:30px;">
		  <thead>
		  <tr>
		  <th>ID</th>
		  <th>NAME</th>
          <th>ENROLLMENT NO</th>
		  <th>ROLL NO</th>
		  <th>BOOK STATUS</th>
		  <th>ROOM NO</th>
		  <th>SEAT NO</th>
		  </tr>
		  </thead>
		  <tbody>
		  <?php
		   while($row = mysqli_fetch_assoc($result)) {
       echo
		'<tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
		<td>'.$row['enrollment_no'].'</td>
		<td>'.$row['roll_no'].'</td>
		<td>'.$row['book_status'].'</td> 
	    <td>'.$row['room_no'].'</td>
		<td>'.$row['seat_no'].'</td>
		</tr>';
      
    }
          ?>	
		  </tbody>
		  </table>
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
