<?php
include('dbconnection.php');
include('assets.php');

// get parameters
$dbname = $_GET['dbname'];
// get table name from url 
$tab_name = $_GET['tab_name'];
// select database
$db = mysqli_select_db($conn, $dbname);
// query

$q = "DESCRIBE ".$tab_name;
// run query
$exe_q = mysqli_query($conn, $q);
if ($exe_q) {
	?>
		<table class="table table-bordered">
			<tr>
				<th>Field</th>
				<th>Type</th>
				<th>Null</th>
				<th>Key</th>
				<th>Default</th>
				<th>Extra</th>
			</tr>
	<?php
	while ($table_rec = $exe_q->fetch_assoc()) {
		?>
		 <tr>
				<td>
					<?php echo $table_rec['Field'];?>	
				</td>
				<td>
					<?php echo $table_rec['Type'];?>	
				</td>
				<td>
					<?php echo $table_rec['Null'];?>	
				</td>
				<td>
					<?php echo $table_rec['Key'];?>	
				</td>
				<td>
					<?php echo $table_rec['Default'];?>	
				</td>
				<td>
					<?php echo $table_rec['Extra'];?>	
				</td>
			</tr>

		<?php
	}
}
else{
	echo "Error".mysqli_error();
}


?>
</table>