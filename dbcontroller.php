<?php 
 include('dbconnection.php');
 $dbname = $_POST['dbname'];

// check for validation
 if (isset($dbname) && !empty($dbname)) {
 	// query logic
 	$query = "CREATE DATABASE ".$dbname;
 	$run_query = mysqli_query($conn, $query);
 	if ($run_query) {
 		session_start();
 	 	$_SESSION['sucess_msg'] = "Database has been successfully created!";
 	 	header('location:createdbform.php');
 	}
 	else{
 		echo "Database not created!".mysqli_error();
 	}

 }
 else{
 	 session_start();
 	 $_SESSION['err_msg'] = "Please Enter the Database Name";
 	 header('location:createdbform.php');
 }

 ?>