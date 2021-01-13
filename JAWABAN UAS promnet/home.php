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

    <title>Home</title>

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
                            <li><a class="menu-top-active" href="home.php">Home</a></li>
                            <li><a href="pinjam.php">Meminjam Buku</a></li>
                            <li><a href="kembali.php">Mengembalikan Buku</a></li>
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
                    <?php 
                        if (!empty($_GET['message']) && $_GET['message'] == 'info') {
                            echo '<span class="col-md-12 alert alert-info text-center"><h4>Data Peminjaman Berhasil Di Input</h4></span>';
                        } else if (!empty($_GET['message']) && $_GET['message'] == 'success') {
                            echo '<span class="col-md-12 alert alert-info text-center"><h4>Data Pengembalian Berhasil Di Input</h4></span>';
                        }
                    ?>
                </div>
                <div class="col-md-12">
                    <div class="alert alert-success text-center">
                        <h1>Selamat Datang</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Jumlah Pinjam</th>
                                            <th>Tanggal Pinjam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $username = $_SESSION['username'];

                                        $data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM user WHERE username = $username"));
                                        $id_user = $data['id'];
                                        $query = mysqli_query($connect, "SELECT judul_buku, jml_pinjam, tgl_pinjam FROM peminjaman JOIN buku ON id_buku = buku.id WHERE id_user = $id_user");
                                        
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $data['judul_buku']; ?></td>
                                            <td><?= $data['jml_pinjam']; ?></td>
                                            <td><?= date('d/M/Y', $data['tgl_pinjam']); ?></td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Jumlah Pinjam</th>
                                            <th>Tanggal Pinjam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $username = $_SESSION['username'];

                                        $data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM user WHERE username = $username"));
                                        $id_user = $data['id'];
                                        $query = mysqli_query($connect, "SELECT judul_buku, jml_kembali, tgl_kembali FROM peminjaman JOIN buku ON id_buku = buku.id WHERE id_user = $id_user");
                                        
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $data['judul_buku']; ?></td>
                                            <td><?= $data['jml_kembali']; ?></td>
                                            <td>
                                                <?php if ($data['tgl_kembali'] == 0): ?>
                                                    <span class="alert-danger">Belum Dikembalikan</span>
                                                <?php else: ?>
                                                <?= date('d/M/Y', $data['tgl_kembali']); ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Jenis</th>
                                            <th>Penerbit</th>
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
