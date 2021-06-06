<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db="LABFAT";
$details=$_POST["details"];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}   
  $sql = "SELECT * FROM student WHERE regno='$details'";
     $sqlb = "SELECT * FROM student WHERE course='$details'";
     $resul = $conn->query($sqlb);

  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo   $row["regno"]. " " . $row["sname"]." ".$row["course"]." ".$row["place"].  "<br>";
      }
  }

   else if ($resul->num_rows > 0) 
    {
      echo "<table border='1'>

        <tr>
        
        <th>Registration number</th>
        
        <th>Student name</th>
        
        <th>Course</th>
        
        <th>Place</th>
        
        </tr>";// output data of each row
      while($row = mysqli_fetch_assoc($resul)) {        
          
          echo "<tr>";
        
          echo "<td>" . $row['regno'] . "</td>";
        
          echo "<td>" . $row['sname'] . "</td>";
        
          echo "<td>" . $row['course'] . "</td>";
        
          echo "<td>" . $row['place'] . "</td>";
        
          echo "</tr>";
        
          }
        
        echo "</table>";
    
    } 
    else {
      echo "Information Unavailable";
    }
          
mysqli_close($conn);
?>

