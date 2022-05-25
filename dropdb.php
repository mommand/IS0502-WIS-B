<?php
// incldude database connection
include('dbconnection.php');
// get the database name
// we should get the database name from url
$dbname = $_GET['dbname'];
// create drop database query
$query = "DROP DATABASE ".$dbname;

// execute the drop database query
$exe_query = $conn->query($query);
// check if the query is successfully executed
if ($exe_query) {
	session_start();
	$_SESSION['sucess_msg'] = "Database has been Dropped!";
	header('location:createdbform.php');
}
else{
	session_start();
	$_SESSION['err_msg'] = "Error occurred!";
	header('location:createdbform.php');
}


?>