<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<?php 
	  include('../assets.php');
	  include ('../dbconnection.php');
	  session_start();
	?>
	<style>
		.hg {
			height: 250px !important;
		}
		.pdd{
			padding-top: 4%;
		}
		.error{
			width: 100% !important;
			margin-top: 20px !important;
		}
	</style>
</head>
<body>
 <div class="container pdd">
 	<div class="row">
 		<div class="col-md-6 offset-md-4">
 			<h4>New upload Section</h4>
 			
 	    </div>
 		<hr>
 	</div>
 	<div class="row">
 		<div class="col-md-6 offset-md-4">
 			<?php
 			 if (isset($_SESSION['success'])) {
 			 	?>
 			 	 <div class="row">
 			 	 	<div class="alert alert-success">
 			 	 		 <?php echo $_SESSION['success'];  ?>
 			 	 	</div>
 			 	 </div>
 			 	<?php
 			 	unset($_SESSION['success']);
 			 }
 			 if (isset($_SESSION['upmsg'])) {
 			 	?>
 			 		<p class="alert alert-danger error">
			  	 		<?php echo $_SESSION['upmsg'];  ?>
			  	 	</p>
 			 	<?php
 			  unset($_SESSION['upmsg']);
 			 }
 			?>
 			<div class="row">
 				<form action="newsController.php" method="post" enctype="multipart/form-data">
 					<div class="row form-group">
 						News Title
 						<input type="text" name="title" class="form-control">
 						<?php
 						  if (isset($_SESSION['error'])) {
 						  	 ?>
 						  	 	<p class="alert alert-danger error">
 						  	 		<?php echo $_SESSION['error'];  ?>
 						  	 	</p>
 						  	 <?php
 						  	 unset($_SESSION['error']);
 						  }
 						?>
 					</div>
 					<div class="row form-group">
 						Category
 						<select class="form-control" name="category">
 							
 							<option>-- Please Select --</option>
 							<?php
									$get_cat = "SELECT * FROM category";
									$run_q = mysqli_query($conn, $get_cat);
									while ($rows = $run_q->fetch_assoc()) {
										  ?>
										  <option value="<?php echo $rows['id']; ?>">
										  	<?php echo $rows['Name']; ?>
										  </option>
										  <?php
									}

								?>
 							
 						</select>
 						<?php
 						  if (isset($_SESSION['error1'])) {
 						  	 ?>
 						  	 	<p class="alert alert-danger error">
 						  	 		<?php echo $_SESSION['error1'];  ?>
 						  	 	</p>
 						  	 <?php
 						  	 unset($_SESSION['error1']);
 						  }
 						?>
 					</div>
 					<div class="row form-group">
 						<p>Upload Photo</p>
 						<input type="file" name="image" class="form-control">
 					</div>
 					<div class="row form-group">
 						<p>News Content</p>
 						<textarea class="form-control hg" name="content">
 							
 						</textarea>
 						<?php
 						  if (isset($_SESSION['error3'])) {
 						  	 ?>
 						  	 	<p class="alert alert-danger error">
 						  	 		<?php echo $_SESSION['error3'];  ?>
 						  	 	</p>
 						  	 <?php
 						  	 unset($_SESSION['error3']);
 						  }
 						?>
 					</div>
 					<div class="row form-group">
 						<input type="submit" name="" value="Save" class="btn btn-primary">
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>
</body>
</html>