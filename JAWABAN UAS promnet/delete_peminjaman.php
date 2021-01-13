<?php 
	include('connect.php');

	$id = $_GET['id'];

	$query = mysqli_query($connect, "DELETE FROM peminjaman WHERE id='$id'") or die(mysqli_error());

	if ($query) {
		header('location:peminjaman.php?message=delete');
	}
?>