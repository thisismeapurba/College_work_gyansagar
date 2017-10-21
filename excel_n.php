<?php  
//export.php  
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'ajd');
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM gyansagar ORDER BY gyansagar_id DESC";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th>Name</th>  
                         <th>Scholar id</th>
                         <th>Gyansagar id </th>						 
                         <th>mobile</th>  
                        <th>Email</th>
                        <th>Fathers name</th>					    
			            <th>blood group</th>
			            <th>dob</th>
			            <th>sex</th>
			            <th>branch</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
        <td>'.$row["name"].'</td>  
         <td>'.$row["scholar_id"].'</td>
         <td>'.$row["gyansagar_id"].'</td>		 
         <td>'.$row["mobile"].'</td>  
         <td>'.$row["email"].'</td>  
         <td>'.$row["fathers_name"].'</td>
		 <td>'.$row["blood_group"].'</td>
		 <td>'.$row["dob"].'</td>
         <td>'.$row["sex"].'</td>
	     <td>'.$row["branch"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
