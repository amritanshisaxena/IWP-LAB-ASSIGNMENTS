<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db="LABFAT";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
  $sql = "INSERT INTO student (regno, sname, course,place)
  VALUES ('15MIS001','Aman','B.Tech','Chennai');";
$sql .= "INSERT INTO student (regno, sname, course,place)
VALUES ('15MIS002','Ajith' ,'B.Tech','Banglore');";
$sql .= "INSERT INTO student (regno, sname, course,place)
VALUES ('15MIS004' ,'Sujoy' ,'M.Tech' ,'Mumbai');";
$sql .= "INSERT INTO student (regno, sname, course,place)
VALUES ('15MIS003','Diksha','M.Tech', 'Chennai');";
$sql .= "INSERT INTO student (regno, sname, course,place)
VALUES ('14MIS0034 ','Aravind ','BCA ','Nagpur');";
$sql .= "INSERT INTO student (regno, sname, course,place)
VALUES ('12MIS0034' ,'Ashlesh' ,'BCA' ,'Coimbatore')";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
            
mysqli_close($conn);
?>
