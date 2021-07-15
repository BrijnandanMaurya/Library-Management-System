<?php
session_start();
$connection = mysqli_connect("localhost", "brij", "8543","brij");
$db = mysqli_select_db($connection, "lms");
$book_name = "";
$book_author = "";
$book_no = "";
$query = "select book_name,book_author,book_no from issued_books where student_id = $_SESSION[id] and status = 1";
?>
<!DOCTYPE html>
<html>

<head>
	<title>User Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style type="text/css">
		.container{
			margin:20px 10px 10px 200px;
			padding:5px 5px;
			border:4px solid black;
			border-radius: 10px;
			background-color: #ffffe6;
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
	</nav>
	<span>
	<marquee><em>This is Library Management System. It opens from 9:15 am to 8:30 pm (Mon-Fri), 9:15 am to 4:30 pm (Saturday &amp; Sunday)</em></marquee>
	</span><br><br>
		<div class="col-md-8 container">
			<form>
				<table class="table-bordered" width="900px" style="text-align: center">
					<tr>
						<th>Book Name:</th>
						<th>Book Author:</th>
						<th>Book Number:</th>
					</tr>
					<?php
					$query_run = mysqli_query($connection, $query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						$book_name = $row['book_name'];
						$author = $row['book_author'];
						$book_no = $row['book_no'];
					?>
						<tr>
							<td><?php echo $book_name; ?></td>
							<td><?php echo $author; ?></td>
							<td><?php echo $book_no; ?></td>
						</tr>
					<?php
					}
					?>
				</table>
			</form>
		</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>