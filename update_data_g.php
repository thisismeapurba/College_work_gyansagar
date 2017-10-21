<?php
 session_start();
 
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $registration=$_POST['registration'];
  $_SESSION['nxtpg']=$registration;
  $father=$_POST['father'];
  $gid=$_POST['gid'];
  $dob=$_POST['dob'];
  $blood=$_POST['blood'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $branch=$_POST['branch'];
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'ajd');
  $q ="update gyansagar set name='$name',mobile='$mobile',email='$email',fathers_name='$father',
  gyansagar_id='$gid',blood_group='$blood',dob='$dob',
  sex='$gender',branch='$branch' where scholar_id='$registration'";
  mysqli_query($con,$q);
  $count=0;
  $qn ="select * from gyansagar where scholar_id='$registration' ";
  $res=mysqli_query($con,$qn);
  $count=mysqli_num_rows($res);
  
   if($count>0){
  ?>
  <script type="text/javascript" >
    alert("Data Updated Succsessfully!!");
	window.location.href="index.html";
  </script>
  <?php
   }
   else{
	
  ?>
  <script type="text/javascript">
   alert("Not able to update !!!");
   window.location.href="index.html";
  </script>
  <?php
  }
  mysqli_close($con);
  
  ?>