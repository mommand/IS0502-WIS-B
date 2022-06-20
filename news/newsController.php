<?php
// include database connection
include('../dbconnection.php');

// get field values from form 

$title = $_POST['title'];
$category = $_POST['category'];
$news_content = $_POST['content'];
$status = 'inactive';

// create insert query 
$query = "INSERT INTO news(id, title, status, content, publish_date, updated_date, Author_id, cat_id) values(null, '$title', '$status', '$news_content', null, null,1, $category)";
// run query
$run_query = mysqli_query($conn, $query);
if ($run_query) {
	 echo "Records created!";
}
else{
	echo "Error!".mysqli_error();
}


?>