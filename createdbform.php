<?php 
 session_start();
 include('dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		PHP Form
	</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<style>
		.pd{
			padding-top:5%;
		}
	</style>
</head>
<body>
<div class="container pd">
	<div class="row">
	 <?php
		if (isset($_SESSION['sucess_msg'])) {
			 ?>
				 <div class="alert alert-info">
				 	<?php
				 	  echo $_SESSION['sucess_msg'];
				 	  unset($_SESSION['sucess_msg']);
				 	?>
				 </div>
			 <?php
			}	
	  ?>
	</div>
	<?php
			if (isset($_SESSION['err_msg'])) {
				 ?>
				 <div class="row">
					 <div class="alert alert-danger">
					 	<?php
					 	  echo $_SESSION['err_msg'];
					 	  unset($_SESSION['err_msg']);
					 	?>
					 </div>
				</div>
				 <?php
				}	
	?>
	<div class="row">

		<div class="col-md-4 offset-md-4">
			
			<form action="dbcontroller.php" method="post">
				<div class="row form-group">
					<label>Database Name</label>
					<input type="text" class="form-control" name="dbname">
				</div>
				<div class="row form-group">
					<input type="submit" class="btn btn-primary" value="Creat!">
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<hr>
		<?php
			$query = "SHOW DATABASES";
			// execute query
			$exe_query = $conn->query($query);
			?>
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>Database Name</th>
					<th colspan="2">More Actions</th>
				</tr>
			<?php
			while ($rows = $exe_query->fetch_assoc()) {
				 $i++;
				?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $rows['Database']; ?></td>
						<td><a href="" class="btn btn-danger">
						Drop</a>
					   </td>
						<td><a href="" class="btn btn-primary">Show Tables</a></td>
					</tr>
				<?php
				
			}

		
		?>
		</table>
	</div>
</div>
</body>
</html>