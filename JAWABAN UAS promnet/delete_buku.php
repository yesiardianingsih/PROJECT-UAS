<?php 
	include('connect.php');

	$id = $_GET['id'];

	$query = mysqli_query($connect, "DELETE FROM buku WHERE id='$id'") or die(mysqli_error());

	if ($query) {
		header('location:buku.php?message=delete');
	}
?>