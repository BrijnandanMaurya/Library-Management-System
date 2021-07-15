<?php
	$connection = mysqli_connect("localhost","brij","8543","brij");
	$db = mysqli_select_db($connection,"lms");
	$query = "delete from books where book_no = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Book Deleted...");
	window.location.href = "manage_book.php";
</script>