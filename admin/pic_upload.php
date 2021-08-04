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
		$q="select * from girls_details where book_status='1'" ;
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
?>
<?php 														
if(isset($_POST['submit']))
{
															
	$f_name =$_FILES['myfile']['name'];
	$f_tmp = $_FILES['myfile']['tmp_name'];
	$f_size = $_FILES['myfile']['size']; 
	$f_extension = explode('.',$f_name);
	$f_extension = strtolower(end($f_extension)); 			
	$f_newfile = uniqid().'.'.$f_extension; 				
	$store = "upload/".$f_newfile; 							
	if($f_extension=='jpg'||$f_extension=='png'||$f_extension=='gif')
	{
		if($f_size>=1000000)
		{
			$error= "Max file should be 1 MB";
		}
		else
		{
			if(move_uploaded_file($f_tmp,$store))
			{
				$success= "Uploded";
				$q="update admin_login set img_src = '$store' where username = '$uname'";
			    mysqli_query($con, $q);
			}
		}
	}
	else
	{
		$error= "you can upload jpg, png, gif image only";
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
                          <li><a  href="insert_student.php" class="active">Add Student</a></li>
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
						  <li><a  href="form_component.html">Change profile picture</a></li>
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
		<div class="row" style="margin-top:40px;">
		<div class="col-md-4" >
		</div>
		<div class="col-md-3" style="height:300px; border:3px solid black;">
			<img src="<?php echo $src;?>" style="height:294px; width:100%;">
		</div>
		<div class="col-md-5">
		</div>
		</div>
		<div class="row" style="margin-top:40px;">
		<div class="col-md-4" >
		</div>
		<div class="col-md-3" >
		 <form action="" method="POST" enctype="multipart/form-data">  	<!--enctype use only file upload function.-->
			<p> <input type="file" name="myfile"  style="font-size:15px; color:black; "/></p>
			<p><input type="submit" value="Upload" style="background-color:black; font-size:18px; color:white; margin-left:30%;" name="submit"/></p>
		</div>
		</form>
		</div>
		</div>
		<p style="text-align:center; color:red;"><?php echo $error?></p>
		<p style="text-align:center; color:green;"><?php echo $success?></p>
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
