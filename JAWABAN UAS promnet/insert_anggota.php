<?php
	include 'connect.php';
	$user 		= $_POST['username'];
	$nama 		= $_POST['nama'];
	$pass 		= $_POST['password'];
	$role 		= $_POST['role'];

    $query = mysqli_query($connect, "INSERT INTO user VALUES('','$nama', '$user', '$pass', '$role')") or die(mysqli_error());

    if ($query) {
        header('location:anggota.php?message=info');
    }
?>