<?php
 session_start();
 if(isset($_POST['submit1'])){
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $registration=$_POST['registration'];
  $g_registration=$_POST['g_registration'];
  $_SESSION['nxtpg']=$registration;
  $father=$_POST['father'];
  $dob=$_POST['dob'];
  $blood=$_POST['blood'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $branch=$_POST['branch'];
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'ajd');
  $q ="insert into gyansagar (name,scholar_id,mobile,email,fathers_name,gyansagar_id,blood_group,dob,sex,branch) 
  values('$name','$registration','$mobile','$email','$father','$g_registration','$blood','$dob','$gender','$branch')";
  $count=0;
  $qn ="select * from gyansagar where scholar_id='$registration' ";
  $res=mysqli_query($con,$qn);
  $count=mysqli_num_rows($res);
   if($count>0){
  ?>
  <script type="text/javascript" >
    alert("Data already exist!!");
	window.location.href="showData_g.php";
  </script>
  <?php
   }
   else{
	 mysqli_query($con,$q);
  ?>
  <script type="text/javascript">
   alert("Data inserted !!!");
   window.location.href="index.html";
  </script>
  <?php
  }
  mysqli_close($con);
  }
  ?>
