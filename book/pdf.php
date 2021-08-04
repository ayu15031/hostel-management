<?php
include 'config.php';
include 'session.php';
$enroll=$_SESSION['enrollment_no'];
$q= "select * from girls_details where enrollment_no = '$enroll'";
$result = mysqli_query($con, $q);
$row = mysqli_fetch_assoc($result);


 $filename = "reciept";

 // include autoloader
 require_once 'dompdf/autoload.inc.php';



// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

//$dompdf->loadHtml($html);
$dompdf->loadHtml("<!DOCTYPE html>
<html>
    <head>
    <title></title>
	</head>
	<body>
    <center>
    <h1>NATIONAL INSTITUTE OF TECHNOLOGY,UTTARAKHAND</h1>
    
    <h1>RECIEPT</h1>
  
  
				<table width='100%'  border='1' style='border-collapse: collapse;  border-spacing: 10px;'>
                    <thead>
                        <tr>
                            <th>LABEL</th>
                            <th>DESCRIPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NAME</td>
                            <td>".$row['name']."</td>
                        </tr>
                        <tr>
                            <td>ROLL NO.</td>
                            <td>".$row['roll_no']."</td>
                        </tr>
                        <tr>
                            <td>ENROLLMENT NO.</td>
                            <td>".$row['enrollment_no']."</td>
                        </tr>
						<tr>
                            <td>AMOUNT PAID</td>
                            <td>Rs. 2000/-</td>
                        </tr>
						<tr>
                            <td>ROOM NO.</td>
                            <td>".$row['room_no']."</td>
                        </tr>
						<tr>
                            <td>SEAT NO.</td>
                            <td>".$row['seat_no']."</td>
                        </tr>
					</tbody>
				  </center>
</table>
</body>
</html>");

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream($filename,array("Attachment"=>0));


$output = $dompdf->output();
file_put_contents("file.pdf", $output);


?>
