<style>
	.pd{
		padding: 40px;
	}
</style>
<?php
// include database connection
include('dbconnection.php');
// include the asset files (bootstrap files)
include('assets.php');
// get parameter from url

$dbname = $_GET['dbname'];

// use database
mysqli_select_db($conn, $dbname);

// create mysql query

$q = "SHOW TABLES";
// execute query
$exe_query = mysqli_query($conn, $q);
// check if the query is successfully executed
if ($exe_query) {
	// check if the number of rows greater than 0, you should write the condition here to check numbers of affected row in the query.
	?>
	<div class="container">
		<div class="row pd">
			<h3><?php echo $dbname; ?>'s Tables</h3>
			<hr>
		</div>
	 <table class="table table-bordered">
	 	<tr>
	 		<th>ID</th>
	 		<th>Table Name</th>
	 		<th colspan="3">More Actions</th>
	 	</tr>
	<?php
	while ($tables = mysqli_fetch_array($exe_query)) {
		$i++;
	?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $tables[0];?></td>
			<td><a href="">Drop</a></td>
			<td><a href="">Describe</a></td>
			<td><a href="">Browse</a></td>
		</tr>
	<?php
	}
}
else{
	echo "Error";
}


?>
</table>
</div>