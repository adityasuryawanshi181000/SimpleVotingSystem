<?php

	$hostname="localhost";
	$username= "root";
	$password= "";
	$database="db_evoting";
	
	//  $conn = mysqli_connect($hostname, $username, $password, $database);

 	function test_input($data) {
	  
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	//   $data = mysqli_real_escape_string($conn,$_POST[$data]);
		return $data;
	}	

?>