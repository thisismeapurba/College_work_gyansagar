<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'ajd');
$sql = "SELECT * FROM gyansagar ";  
$result = mysqli_query($con, $sql);
?>
<html>  
 <head>  
  <title>Export  data to Excel</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Gyansagar registered student list </h2><br /> 
    <table class="table table-bordered">
               <tr>  
                         <th>Name</th>  
                         <th>Scholar id</th>  
                         <th>mobile</th>  
                        <th>Email</th>
                        <th>Fathers name</th>
					    <th>Gyansagar id </th>
			            <th>blood group</th>
			            <th>dob</th>
			            <th>sex</th>
			            <th>branch</th>
             </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["name"].'</td>  
         <td>****</td>  
         <td>'.$row["mobile"].'</td>  
         <td>'.$row["email"].'</td>  
         <td>'.$row["fathers_name"].'</td>
		 <td>'.$row["gyansagar_id"].'</td>
		 <td>'.$row["blood_group"].'</td>
		 <td>'.$row["dob"].'</td>
         <td>'.$row["sex"].'</td>
	     <td>'.$row["branch"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="excel_n.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>
