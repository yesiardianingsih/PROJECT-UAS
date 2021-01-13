<?php
include('connect.php');

$id 		= $_POST['id'];
$user 		= $_POST['username'];
$nama 		= $_POST['nama'];
$pass 		= $_POST['password'];
$role 		= $_POST['role'];

$query = mysqli_query($connect, "UPDATE user SET  nama='$nama', username='$user', password='$pass', role='$role' WHERE id='$id'") or die(mysqli_error());

if ($query) {
	header('location:anggota.php?message=success');
}
?>