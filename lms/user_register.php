<?php
	$connection = mysqli_connect("localhost","brij","8543","brij");
	$db = mysqli_select_db($connection,"lms");
	$query = "insert into users values($_POST[id],'$_POST[fullName]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration Successfully....You may login now.")
	window.location.href = "index.php";
</script>

	