<?php
session_start();
if (isset($_POST['login'])) {
	$connection = mysqli_connect("localhost", "brij", "8543", "brij");
	$db = mysqli_select_db($connection, "lms");
	$query = "select * from admins where email = '$_POST[email]'";
	$query_run = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($query_run)) {
		if ($row['email'] == $_POST['email']) {
			if ($row['password'] == $_POST['password']) {
				$_SESSION['id'] = $row['id'];
				$_SESSION['fullName'] = $row['fullName'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['mobile'] = $row[' mobile'];
				header("Location:admin_dashboard.php");
			} else {
?>
				<script type="text/javascript">
					alert("Wrong Password Entered")
					window.location.href = "index.php";
				</script>
<?php
			}
		}
	}
}
?>