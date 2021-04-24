<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body {
			margin:0;
			padding:0;
		}
		.container{
			background: #000;
			color: #fff;
			top: 50%;
			left: 50%;
			width: 280px;
			height: 420PX;
			position: absolute;
			transform: translate(-50%,-50%);
		}
		.admin{
			width: 100px;
			height: 100px;
			border_radius:50%;
			position: absolute;
			top: -50px;
			left: calc(47.5% - 52.5px);
		}
</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<img src="admin.png" class="admin">
		<div class="row">
			<div class="col-lg-6">
				<font color="red"><h2><u><b>Login Form</b></u></h2></font>
				<form action="validation.php" method="post">
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

			<div class="col-lg-6">
				<font color="red"><h2><u><b>Sign up Form</b></u></h2></font>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">	
						<label>Password</label>
						<input type="Password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Sign up</button>	
				</form>		
			</div>	
	</div>


</body>
</html>