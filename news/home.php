<!DOCTYPE html>
<html>
<head>
	<?php include('../assets.php'); ?>
	<title>Publish news</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<div class="row">
					<h5>Publish your news here.</h5>
				</div>
				<form action="newsController.php" method="post">
					<div class="row form-group">
						Title
						<input type="text" class="form-control" name="title">
					</div>
					<div class="row form-group">
						Category
						<select class="form-control" name="category">
							<option> -- Select --</option>
							<option value="1">Tech</option>
							<option value="2">Sport</option>
							<option value="3">Economics</option>
							<option value="4">Art</option>
						</select>
					</div>
					<div class="row form-group">
						Content
						<textarea class="form-control" rows="8" cols="6" name="content">
						</textarea>
					</div>
					<div class="row form-group">
						<input type="submit" class="btn btn-primary" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>