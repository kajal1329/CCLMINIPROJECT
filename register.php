<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<form action="registration1.php" method="post">
					<div class="form-group">
						<p>Name </p>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<p>Members </p>
						<input type="text" name="member" class="form-control" required>
					</div>
					<div class="form-group">	
						<p>Project Type</p>
						<input type="text" name="project" list="project" class="form-control" required>
						<datalist id="project" >
        				<option value="Paper">
        				<option value="Poster">
        				<option value="Project(Model)">
      					</datalist>
					</div>
					<div class="form-group">	
						<p>Project Name</p>
						<input type="text" name="pn" class="form-control" required>
					</div>
					<div class="form-group">	
						<p>College Name</p>
						<input type="text" name="cn" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Register</button>	
				</form>	
<a href="logout.php" class="logout">Logout</a>
</body>
</html>