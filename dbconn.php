<?php
$user = "root";
$pass = ""; 
$host = "localhost";
$dbname= "read2rent";
$dbcon= mysqli_connect($host, $user, $pass, $dbname);
//continue next slide
// continue from previous slide


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  ?>