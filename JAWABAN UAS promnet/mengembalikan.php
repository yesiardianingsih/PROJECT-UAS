<?php
include('connect.php');

$id_user 		= $_POST['id_user'];
$kode_buku		= $_POST['kode'];
$jml_kembali	= $_POST['jml_kembali'];
$tgl_kembali	= time();

$query = mysqli_query($connect, "UPDATE peminjaman SET  username='$user', password='$pass', role='$role' WHERE id_user='$id_user' AND id_buku='$kode_buku") or die(mysqli_error());

if ($query) {
	header('location:home.php?message=success');
}
?>