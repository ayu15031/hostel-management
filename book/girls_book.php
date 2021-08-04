<?php

	include('config.php');
	include('header.php');
	$z="";
	
	$error="";
	
	
	if(isset($_POST['continue'])){
		$room_no=$_POST['room_no'];
		$seat_no=$_POST['seat_no'];
		if($room_no=="") 
		{
			$error="Plz select room no.";
		}
		else if($seat_no=="") 
		{
			$error="Plz select seat no.";
		}
		else{
			$_SESSION['room_no']=$room_no;
			$_SESSION['seat_no']=$seat_no;
			header('location:../payment_gateway/index.php');
		}
	}
	
?>


		<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2>GIRLS HOSTEL</h2>
				<p style="text-align:center; margin-top:20px;">Select your bed in the room</p>
				<p style="text-align:center; margin-top:20px;"><span><i class="fa fa-bed" style="color:#50d8af; font-size:25px;"></i></span> : Available</p>
				<p style="text-align:center; margin-top:20px;"><span><i class="fa fa-bed" style="color:#A9A9A9; font-size:25px;"></i></span> : Not Available</p>
				</div>
				<p style="text-align:center; color:red;"><?php echo $error;?></p>
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
						 
						 <div class="panel-body" id="a" >
						 <form method="post">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"  style="text-align:center">
									<button type="submit" class="box1" name="207" value="207" onClick="window.location='#bed'">207</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button type="submit" class="box1" name="208" value="208" onClick="window.location='#bed'">208</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button type="submit" class="box1" name="206" value="206" onClick="window.location='#bed'">206</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"  style="text-align:center">
									<button type="submit" class="box1" name="209" value="209" onClick="window.location='#bed'">209</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" onClick="window.location='#bed'">
									<button type="submit" class="box1" name="205" value="205" onClick="window.location='#bed'">205</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button type="submit" class="box1" name="210" value="210" onClick="window.location='#bed'">210</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button type="submit" class="box1" name="204" value="204" onClick="window.location='#bed'">204</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button type="submit" class="box1" name="211" value="211" onClick="window.location='#bed'">211</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center">
									<button type="submit" class="box1" name="203" value="203" onClick="window.location='#bed'">203</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button type="submit" class="box1" name="212" value="212" onClick="window.location='#bed'">212</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button type="submit" class="box1" name="202" value="202" onClick="window.location='#bed'">202</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center">
									<button type="submit" class="box1" name="213" value="213" onClick="window.location='#bed'">213</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button type="submit" class="box1" name="201" value="201" onClick="window.location='#bed'">201</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center; height:50px">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center">
								</div>
							</div>
							</div>
							<div class="panel-body"  id="b" style="display:none"  >
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"  style="text-align:center">
									<button class="box1" name="306" value="306" onClick="window.location='#bed'">306</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center">
									<button class="box1" name="307" value="307" onClick="window.location='#bed'">307</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button class="box1" name="305" value="305" onClick="window.location='#bed'">305</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"  style="text-align:center">
									<button class="box1" name="308" value="308" onClick="window.location='#bed'">308</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center" >
									<button class="box1" name="304" value="304" onClick="window.location='#bed'">304</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center">
									<button class="box1" name="309" value="309" onClick="window.location='#bed'">309</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;" >
									<button class="box1" name="303" value="303" onClick="window.location='#bed'">303</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;" >
									<button class="box1" name="310" value="310" onClick="window.location='#bed'">310</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;" >
									<button class="box1" name="302" value="302" onClick="window.location='#bed'">302</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;" >
									<button onClick="window.location='#bed'" name="311" value="311" class="box1">311</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;" >
									<button onClick="window.location='#bed'" name="301" value="301" class="box1">301</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;" >
									<button onClick="window.location='#bed'" name="312" value="312" class="box1">312</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;">
									
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center;">
									<button class="box1" name="313" value="313" onClick="window.location='#bed'">313</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:center">
									
								</div>
							</div>
							</form>
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
					<div class="panel panel-default" id="bed" style="display:none" >
					<div class="panel-body" >
						
						<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center">
						<button id="7" data-toggle="modal" data-target="#myModal" class="bed-style" onClick="seat(1)"><i class="fa fa-bed" style="color:#50d8af; font-size:40px;" id="1"></i></button>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center">
						<button id="8" data-toggle="modal" data-target="#myModal" onClick="seat(2)" class="bed-style"><i class="fa fa-bed" style="color:#50d8af; font-size:40px;" id="2"></i></button>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center">
						<button id="9" data-toggle="modal" data-target="#myModal" onClick="seat(3)" class="bed-style"><i class="fa fa-bed" style="color:#50d8af; font-size:40px;" id="3"></i></button>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center">
						<button id="10" data-toggle="modal" data-target="#myModal"class="bed-style" onClick="seat(4)"><i class="fa fa-bed" style="color:#50d8af; font-size:40px;" id="4"></i></button>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center">
						<button id="11" data-toggle="modal" data-target="#myModal"class="bed-style" onClick="seat(5)"><i class="fa fa-bed" style="color:#50d8af; font-size:40px;" id="5"></i></button>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center">
						<button id="12" data-toggle="modal" data-target="#myModal" class="bed-style" onClick="seat(6)"><i class="fa fa-bed" style="color:#50d8af; font-size:40px;" id="6"></i></button>
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






<?php
	
	function seat($room_no){
		echo'<script>document.getElementById("bed").style.display="block";</script>';
		
		
		$GLOBALS['z']= $room_no;
		
		$con= mysqli_connect('localhost','root','','hostel1');
		$q= "select * from hostel_girls where room_no = '$room_no'";
		$result = mysqli_query($con, $q);
		
		while($row = mysqli_fetch_assoc($result)){
			if($row['book_status']==1){
				if($row['seat_no']==1){

				echo '<script>document.getElementById("1").style.color = "#A9A9A9";</script>';
				
				echo'<script>document.getElementById("7").style.pointerEvents = "none";</script>';
				}
				else if($row['seat_no']==2){

				echo '<script>document.getElementById("2").style.color = "#A9A9A9";</script>';
				
				echo'<script>document.getElementById("8").style.pointerEvents = "none";</script>';
				}
				else if($row['seat_no']==3){

				echo '<script>document.getElementById("3").style.color = "#A9A9A9";</script>';
				
				echo'<script>document.getElementById("9").style.pointerEvents = "none";</script>';
				}
				else if($row['seat_no']==4){

				echo '<script>document.getElementById("4").style.color = "#A9A9A9";</script>';
				
				echo'<script>document.getElementById("10").style.pointerEvents = "none";</script>';
				}
				else if($row['seat_no']==5){

				echo '<script>document.getElementById("5").style.color = "#A9A9A9";</script>';
				
				echo'<script>document.getElementById("11").style.pointerEvents = "none";</script>';
				}
				else if($row['seat_no']==6){

				echo '<script>document.getElementById("6").style.color = "#A9A9A9";</script>';
				
				echo'<script>document.getElementById("12").style.pointerEvents = "none";</script>';
				}
			}
		
			
		}	
		
	}
	
	

	
	if(isset($_POST['201'])){
		seat(201);
	}if(isset($_POST['202'])){
		seat(202);
	}if(isset($_POST['203'])){
		seat(203);
	}if(isset($_POST['204'])){
		seat(204);
	}if(isset($_POST['205'])){
		seat(205);
	}if(isset($_POST['206'])){
		seat(206);
	}if(isset($_POST['207'])){
		seat(207);
	}if(isset($_POST['208'])){
		seat(208);
	}if(isset($_POST['209'])){
		seat(209);
	}if(isset($_POST['210'])){
		seat(210);
	}if(isset($_POST['211'])){
		seat(211);
	}if(isset($_POST['212'])){
		seat(212);
	}if(isset($_POST['213'])){
		seat(213);
	}if(isset($_POST['301'])){
		seat(301);
	}if(isset($_POST['302'])){
		seat(302);
	}if(isset($_POST['303'])){
		seat(303);
	}if(isset($_POST['304'])){
		seat(304);
	}if(isset($_POST['305'])){
		seat(305);
	}if(isset($_POST['306'])){
		seat(306);
	}if(isset($_POST['307'])){
		seat(307);
	}if(isset($_POST['308'])){
		seat(308);
	}if(isset($_POST['309'])){
		seat(309);
	}if(isset($_POST['310'])){
		seat(310);
	}if(isset($_POST['311'])){
		seat(311);
	}if(isset($_POST['312'])){
		seat(312);
	}if(isset($_POST['313'])){
		seat(313);
	}
?>

<div class="row">
						<p style="text-align:center; color:#50d8af; font-size:25px;"><b>ROOM NO : <?php echo $z;?></b></p>
						</div>
	
	<div class="modal" id="myModal" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
 <div class="modal-content">
        <div class="modal-header" style="background-color:#50d8af; color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Confirmation</h4>
        </div>
        <div class="modal-body">
          <p>Do you want to continue to book your seat in 
		  <form method="post">
		  <b>Room no. :</b> <input type="text" style="border:none;" name="room_no" value ="<?php echo $z;?>" readonly></input><br>
		  <b> Seat no. :</b> <input type="text" style="border:none;" name="seat_no" id="input2"readonly></input>
		   </p>
		  
        </div>
        <div class="modal-footer" style="background-color:#50d8af; color:white;">
		  <button type="submit" name="continue" class="btn btn-default" >Continue</button>
		  </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
</div>
<script>
 function seat(seat_no){
	 document.getElementById("input2").value=seat_no;
 }

</script>

<?php	
		include('footer.php');
?>