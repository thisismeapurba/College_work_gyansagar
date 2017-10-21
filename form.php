<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'ajd');
require("fpdf181/fpdf.php");
$sql = "SELECT * FROM student ";  
$result = mysqli_query($con, $sql);

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont("Arial","B",14);
$pdf->Cell(0, 10,"Registered student",0,1,"C");
$pdf->Cell(50,5,"NAME",1,0,"C");
$pdf->Cell(40,5,"Scholar Id",1,0,"C");
$pdf->Cell(30,5,"Branch",1,0,"C");
$pdf->Cell(30,5,"programme",1,0,"C");
$pdf->Cell(40,5,"Phone No.",1,1,"C");

 while($row = mysqli_fetch_array($result))
  {
       $pdf->SetFont("Arial","",12);
       $pdf->Cell(50,5,$row["name"],1,0,"C");
       $pdf->Cell(40,5,$row["scholar_id"],1,0,"C");
       $pdf->Cell(30,5,$row["branch"],1,0,"C");
       $pdf->Cell(30,5,$row["programme"],1,0,"C");
       $pdf->Cell(40,5,$row["mobile"] ,1,1,"C");
        
         
         		 
          
         
      //   $row["fathers_name"]
	  //   $row["blood_group"]
	  //   $row["dob"]
      //   $row["sex"]
	   //  $row["branch"]
  
  }



$pdf->output();


?>