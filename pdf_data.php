<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'ajd');
require("fpdf181/fpdf.php");
$sql = "SELECT * FROM gyansagar ";  
$result = mysqli_query($con, $sql);

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont("Arial","B",14);
$pdf->Cell(0, 10,"Registered student",0,1,"C");
$pdf->Cell(70,5,"NAME",1,0,"C");
$pdf->Cell(30,5,"Scholar Id",1,0,"C");
$pdf->Cell(35,5,"Gyansagar_ID",1,0,"C");
$pdf->Cell(25,5,"DOB",1,0,"C");
$pdf->Cell(30,5,"Phone No.",1,1,"C");

 while($row = mysqli_fetch_array($result))
  {
       $pdf->SetFont("Arial","",12);
       $pdf->Cell(70,5,$row["name"],1,0,"C");
       $pdf->Cell(30,5,"*****",1,0,"C");
       $pdf->Cell(35,5,$row["gyansagar_id"],1,0,"C");
       $pdf->Cell(25,5,$row["dob"],1,0,"C");
       $pdf->Cell(30,5,$row["mobile"] ,1,1,"C");
        
         
         		 
          
         
      //   $row["fathers_name"]
	  //   $row["blood_group"]
	  //   $row["dob"]
      //   $row["sex"]
	   //  $row["branch"]
  
  }



$pdf->output();


?>