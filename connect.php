<?php
$host = "db";
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "mydb";

// Create connection
  $conn = mysqli_connect($host, $username, $password, $dbname);
//  //
// Check connection
          if (!$conn)
                  {
                  die("Connection failed: " . mysqli_connect_error());
                  }
	 // mysqli_close($conn);
?>
