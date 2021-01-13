<?php
	include 'connect.php';

	$id_user 	= $_POST['id_user'];
	$kode 		= $_POST['kode'];
	$jml_pinjam	= $_POST['jml_pinjam'];
	$tgl_pinjam	= time();
	$jml_kembali= 0;
	$tgl_kembali= 0;

    $query = mysqli_query($connect, "INSERT INTO peminjaman VALUES('','$id_user', '$kode', '$tgl_pinjam', '$jml_pinjam', '$tgl_kembali', '$jml_kembali')") or die(mysqli_error());

    if ($query) {
        header('location:home.php?message=info');
    }
?>