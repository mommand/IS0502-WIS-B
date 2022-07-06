<?php
// create database connection
include('../dbconnection.php');
// get posted data from user inputs
// start session
session_start();
$title = mysqli_real_escape_string($conn, $_POST['title']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$news_content = mysqli_real_escape_string($conn,$_POST['content']);
$status = 'inactive';
$author_id = 1;

$p_date = date("Y-m-d");
$update_date = date("Y-m-d h:i");

if (empty($title)) {
	 
	 $_SESSION['error'] = "Please fill out the title feild";
	 header('location:home.php');
}
if (empty($category)) {
	$_SESSION['error1'] = "Please fill out the categroy feild";
	 header('location:home.php');
}
if (empty($news_content)) {
	$_SESSION['error3'] = "Please fill out the the content feild";
	 header('location:home.php');
}


$$target_dir = 'uploads/';
$target_file = $target_dir.basename($_FILES['image']['name']);
$file = $target_file;
// file type
$imagetype = strtolower(pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION));

if ($imagetype == 'jpg' || $imagetype == 'jpeg'|| $imagetype == 'png') {
	  	 if (file_exists($target_file)) {
	  	 	session_start();
	  	 	$_SESSION['upmsg'] = "file already exist!";
	  	 	header("location:home.php");
	  	 }
	  	 else{
	  	 	if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
	  	 	  // insert query
					// create insert query 
					$query = "INSERT INTO news(id, title, status, content, foto, publish_date, updated_date, Author_id, cat_id) values(null, '$title', '$status', '$news_content','$file', '$p_date', '$update_date',1, $category)";
					// run query
					$run_query = mysqli_query($conn, $query);
					if ($run_query) {
						 echo "Records created!";
					}
					else{
						echo "Error!".mysqli_error($conn);
					}
	  	 	   
		  	 }
		  	 else{
		  	 	echo "not uploaded!";
		  	 }
	  	 }
	  	 
	}
	else{
		echo "type not allowed";
	}




?>