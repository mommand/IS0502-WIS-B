<?php
// include database connection
include('dbconnection.php');
include('assets.php');
// get database name from url
$dbname = $_GET['dbname'];
// create show tables query
$query = "SHOW TABLES FROM ".$dbname;
// execute show tables query
$exe_q = $conn->query($query);
// create a while loop to fetch all the tables within a database
?>
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Table name</th>
		<th colspan="3">More Actions</th>
	</tr>
<?php 
while ($records = mysqli_fetch_array($exe_q)) {
	$i++
	?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $records[0]; ?></td>
			<td><a href="">Drop Table</a></td>
			<td><a href="">Describe Table</a></td>
			<td><a href="">Brows Table</a></td>
		</tr>
	<?php
}

?>
</table>