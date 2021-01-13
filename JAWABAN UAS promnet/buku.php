<?php 
    include('connect.php');
    include('session.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Tampil Buku</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Sistem Login Yesi </strong>
                </div>
            </div>
        </div>
    </header>
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php">Home</a></li>
                            <li><a href="anggota.php">Anggota</a></li>
                            <li><a class="menu-top-active" href="buku.php">Buku</a></li>
                            <li><a href="peminjaman.php">Peminjaman</a></li>
                            <li><a href="logout.php">Log Out</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Data Buku</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">

                                <?php 
                                    if (!empty($_GET['message']) && $_GET['message'] == 'success') {
                                        echo '<span class="col-md-12 alert alert-success text-center"><h4>Berhasil meng-update data!</h4></span>';
                                    } else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
                                        echo '<span class="col-md-12 alert alert-success text-center"><h4>Berhasil menghapus data!</h4></span>';
                                    } else if (!empty($_GET['message']) && $_GET['message'] == 'info') {
                                        echo '<span class="col-md-12 alert alert-success text-center"><h4>Berhasil menambah data!</h4></span>';
                                    }
                                ?>
                                <a class="btn btn-primary" href="tambah_buku.php">Tambah Data</a>
                                <hr>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Jenis</th>
                                            <th>Penerbit</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $query = mysqli_query($connect, "SELECT * FROM buku");
                                        
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $data['kode_buku']; ?></td>
                                            <td><?= $data['judul_buku']; ?></td>
                                            <td><?= $data['pengarang']; ?></td>
                                            <td><?= $data['jenis_buku']; ?></td>
                                            <td><?= $data['penerbit']; ?></td>
                                            <td width="150">
                                                <a class="btn btn-success btn-md" href="edit_buku.php?id=<?= $data['id']; ?>">Edit</a> 
                                                <a class="btn btn-danger btn-md" href="delete_buku.php?id=<?= $data['id']; ?>">Delete</a>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; <?= date('Y'); ?> | By : Yesi</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
