<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>User Dashboard</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style type="text/css">
		#side_bar {
			background-color: whitesmoke;
			padding: 50px;
			width: 300px;
			height: 450px;
		}
	</style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container-fluid">
			<div class="navbar-header">
				<img class="mr-3" src="logo.png" alt="M" width="55" height="55">
				<a class="navbar-brand" href="index.php">Malviyan's Library</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['fullName']; ?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email']; ?></strong></span></font>
	<ul class="nav navbar-nav navbar-right">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="view_profile.php">View Profile</a>
				<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
				<a class="dropdown-item" href="change_password.php">Change Password</a>
			</div>
		</li>
		<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
	</ul>
	</div>
	</nav><br>
	<span>
	<marquee><em>This is Library Management System. It opens from 9:15 am to 8:30 pm (Mon-Fri), 9:15 am to 4:30 pm (Saturday &amp; Sunday)</em></marquee>
	</span><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="update_password.php" method="post">
				<div class="form-group">
					<label>Enter Current Password:</label>
					<input type="password" name="old_password" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter New Password:</label>
					<input type="password" name="new_password" class="form-control">
				</div>
				<button type="submit" name="update" class="btn btn-primary">Update Password</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>