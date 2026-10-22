<link rel="stylesheet" href="css_login/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<body>

	<div class="container">

		<div class="row">
            
			<div class="col-md-6">
			<div id="login"> 
				<h2>Login</h2>
				<form action="login.php" method="post">
					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
            </div>
			</div>
            



			<div class="col-md-6">
				<h2>Register</h2>
				<form action="register.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Profile Picture:</label>
						<input type="file" name="profile_pic" class="form-control-file" required>
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
		</div>
	</div>
