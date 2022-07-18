<?php
include 'connect.php';

		$username =  $_POST['uname'];
     		$password = $_POST['password'];
		         
		// Performing insert query execution
	//	echo "INSERT INTO user_details  VALUES ('$username','$password')";
                $sql = mysqli_query($conn, "INSERT INTO user_details  VALUES ('$username','$password')");
		echo "<h3>Data is successfully stored in the Database.</h3>";
?>
