
<?php
error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "fms");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$search=mysqli_real_escape_string($link, $_REQUEST['search']);

$sql = "SELECT * FROM `student` where Course='$search' or Year='$search' or Block='$search' or ID='$search' or Lastname='$search' or Firstname='$search' or Email='$search' or Age='$search' or Gender='$search' or Contactno='$search'";

if(mysqli_query($link, $sql)){
    echo "<center><i><h2 style='background-color:lightblue; width:600px;'>$search</h2></i></center>";

    $result=$link->query($sql);

echo "<center><table border='2' width='1300'>
 <tr>
                        <th>Course</th>
                        <th>Year</th>
                        <th>Block</th>
                        <th>ID</th>
                        <th>Lastname</th>
                        <th>Firstname</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>ContactNo</th>

                    </tr>";

while($row=$result->fetch_array()){
  echo "<tr>";
  echo "<td>$row[0]</td>";
  echo "<td>$row[1]</td>";
  echo "<td>$row[2]</td>";
  echo "<td>$row[3]</td>";
  echo "<td>$row[4]</td>";    
  echo "<td>$row[5]</td>";    
  echo "<td>$row[6]</td>";  
  echo "<td>$row[7]</td>";    
  echo "<td>$row[8]</td>";    
  echo "<td>$row[9]</td>";    
  echo "</tr>";
}
echo "</table> </center>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>