<?php
	$connection = mysqli_connect("localhost","brij","8543","brij");
	$db = mysqli_select_db($connection,"lms");
	$query = "delete from authors where author_id = $_GET[aid]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Author Deleted...");
	window.location.href = "manage_author.php";
</script>