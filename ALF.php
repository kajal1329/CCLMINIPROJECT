<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			margin:0;
			padding:0;
		}
		.container{
			color: #fff;
			top: 50%;
			left: 50%;
			right: 50%;
			width: 50px;
			height: 250PX;
			position: absolute;
			transform: translate(-50%,-50%);
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-lg-4">
			<font color="red"><h2><u><b>Admin Login Form</b></u></h2></font>
			<form action="ad.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">	
					<label>Password</label>
					<input type="Password" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>	
				</form>	
		</div>
	</div>
</body>
</html>