<?php
session_start();
$connection = mysqli_connect("localhost", "brij", "8543", "brij");
$db = mysqli_select_db($connection, "lms");
$fullName = "";
$email = "";
$mobile = "";
$query = "select * from admins where email = '$_SESSION[email]'";
$query_run = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($query_run)) {
	$fullName = $row['fullName'];
	$email = $row['email'];
	$mobile = $row['mobile'];
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin Dashboard</title>
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
			<form action="update.php" method="post">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" value="<?php echo $fullName; ?>" name="name">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" value="<?php echo $email; ?>" name="email">
				</div>
				<div class="form-group">
					<label>Mobile:</label>
					<input type="text" class="form-control" value="<?php echo $mobile; ?>" name="mobile">
				</div>
				<button type="submit" name="update" class="btn btn-primary">Update</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>