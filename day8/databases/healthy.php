<?php
include 'connect.php';
// $connection = mysqli_connect('localhost','root','','a_database');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
$query = "SELECT * FROM `food` WHERE `healthy_unhealthy`='h' ORDER BY `id` DESC";

if ($result = mysqli_query($conn, $query)) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  $row["id"]." food: " . $row["food"].  "  calories: ". $row["calories"]. "<br>";
    }
  } else {
    echo "0 results";
  }
?>