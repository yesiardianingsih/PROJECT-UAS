<?php
include('connect.php');

$id 		= $_POST['id'];
$kode 		= $_POST['kode'];
$judul 		= $_POST['judul'];
$pengarang 	= $_POST['pengarang'];
$jenis 		= $_POST['jenis'];
$penerbit 	= $_POST['penerbit'];

$query = mysqli_query($connect, "UPDATE buku SET  kode_buku='$kode', judul_buku='$judul', pengarang='$pengarang', jenis_buku='$jenis', penerbit='$penerbit' WHERE id='$id'") or die(mysqli_error());

if ($query) {
	header('location:buku.php?message=success');
}
?>