<?php

// include database connection
include('../dbconnection.php');

// get field values from form 

$title = $_POST['title'];
$category = $_POST['category'];
$news_content = $_POST['content'];
$status = 'inactive';

$target_dir = 'uploads/';
$target_file = $target_dir.basename($_FILES['image']['name']);
$file = $target_file;
// file type
$imagetype = strtolower(pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION));

if ($imagetype == 'jpg' || $imagetype == 'jpeg'|| $imagetype == 'png') {
	  if ($_FILES['image']['size'] > 50000) {
	  	 if (file_exists($target_file)) {
	  	 	session_start();
	  	 	$_SESSION['upmsg'] = "file already exist!";
	  	 	header("location:news.php");
	  	 }
	  	 else{
	  	 	if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
	  	 	  // insert query
					// create insert query 
					$query = "INSERT INTO news(id, title, status, content, foto, publish_date, updated_date, Author_id, cat_id) values(null, '$title', '$status', '$news_content','$file', null, null,1, $category)";
					// run query
					$run_query = mysqli_query($conn, $query);
					if ($run_query) {
						 echo "Records created!";
					}
					else{
						echo "Error!".mysqli_error();
					}
	  	 	   
		  	 }
		  	 else{
		  	 	echo "not uploaded!";
		  	 }
	  	 }
	  	 
	  }
	}
	else{
		echo "type not allowed";
	}



?>