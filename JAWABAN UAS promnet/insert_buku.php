<?php
	include 'connect.php';
    $kode       = $_POST['kode'];
    $judul      = $_POST['judul'];
    $pengarang  = $_POST['pengarang'];
    $jenis      = $_POST['jenis'];
    $penerbit   = $_POST['penerbit'];

    $query = mysqli_query($connect, "INSERT INTO buku VALUES('', '$kode', '$judul', '$pengarang', '$jenis', '$penerbit')") or die(mysqli_error());

    if ($query) {
        header('location:buku.php?message=info');
    }
?>