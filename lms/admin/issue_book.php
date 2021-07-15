<?php
require('functions.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>User Dashboard</title>
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
			<li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
		</ul>
		</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
		<div class="container-fluid">
			<ul class="nav navbar-nav navbar-center">
				<li class="nav-item">
					<a href="admin_dashboard.php" class="nav-link">Dashboard</a>
				</li>
				<li class="nav-item dropdown" type="button">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
					<div class="dropdown-menu alert-success">
						<a href="add_book.php" class="dropdown-item">Add New Book</a>
						<a href="manage_book.php" class="dropdown-item">Manage Books</a>
					</div>
				</li>
				<li class="nav-item dropdown" type="button">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
					<div class="dropdown-menu alert-success">
						<a href="add_cat.php" class="dropdown-item">Add New Category</a>
						<a href="manage_cat.php" class="dropdown-item">Manage Category</a>
					</div>
				</li>
				<li class="nav-item dropdown" type="button">
					<a class="nav-link dropdown-toggle  " data-toggle="dropdown">Author</a>
					<div class="dropdown-menu alert-success">
						<a href="add_author.php" class="dropdown-item">Add New Author</a>
						<a href="manage_author.php" class="dropdown-item">Manage Authors</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="issue_book.php" class="nav-link">Issue Book</a>
				</li>
			</ul>
		</div>
	</nav>

	<span>
	<marquee><em>This is Library Management System. It opens from 9:15 am to 8:30 pm (Mon-Fri), 9:15 am to 4:30 pm (Saturday &amp; Sunday)</em></marquee>
	</span><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				<div class="form-group">
					<label>Book Name:</label>
					<input type="text" name="book_name" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Book Author:</label>
					<select class="form-control" name="book_author">
						<option>-Select author-</option>
						<?php
						$connection = mysqli_connect("localhost", "brij", "8543", "brij");
						$db = mysqli_select_db($connection, "lms");
						$query = "select author_name from authors";
						$query_run = mysqli_query($connection, $query);
						while ($row = mysqli_fetch_assoc($query_run)) {
						?>
							<option><?php echo $row['author_name']; ?></option>
						<?php
						}
						?>
					</select>
					<div class="form-group">
						<label>Book Number:</label>
						<input type="text" name="book_no" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Student ID:</label>
						<input type="text" name="student_id" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Issue Date:</label>
						<input type="date" name="issue_date" class="form-control" value="<?php echo date("dd-mm-yy"); ?>" required="">
					</div>
				</div>
				<button class="btn btn-primary" name="issue_book">Issue Book</button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>

<?php
if (isset($_POST['issue_book'])) {
	$connection = mysqli_connect("localhost", "brij", "8543", "brij");
	$db = mysqli_select_db($connection, "lms");
	$query = "insert into issued_books values($_POST[book_no],'$_POST[book_name]','$_POST[book_author]',$_POST[student_id],1,'$_POST[issue_date]')";
	$query_run = mysqli_query($connection, $query);
}
?>