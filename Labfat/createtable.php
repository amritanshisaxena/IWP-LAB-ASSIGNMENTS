<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LABFAT";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE student (
regno VARCHAR(30)  PRIMARY KEY,
sname VARCHAR(30) NOT NULL,
course VARCHAR(30) NOT NULL,
place VARCHAR(30) 
 )";

if (mysqli_query($conn, $sql)) {
    echo "Table Student created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>
  