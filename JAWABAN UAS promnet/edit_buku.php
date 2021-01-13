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

    <title>Edit Buku</title>

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
                            <li><a class="menu-top-active" href="dashboard.php">Home</a></li>
                            <li><a href="anggota.php">Anggota</a></li>
                            <li><a href="buku.php">Buku</a></li>
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
                    <h1 class="page-head-line">Edit Buku</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php 
                                $id = $_GET['id'];

                                $query = mysqli_query($connect, "SELECT * FROM buku WHERE id='$id'") or die(mysqli_error());

                                $data = mysqli_fetch_array($query);
                            ?>
                            <form action="update_buku.php" method="post">
                                <div class="form-group">
                                    <label for="kode">Kode Buku</label>
                                    <input type="text" class="form-control" name="kode" id="kode" value="<?= $data['kode_buku']; ?>" />
                                    <input type="hidden" class="form-control" name="id" id="id" value="<?= $id; ?>" />
                                </div>

                                <div class="form-group">
                                    <label for="judul">Judul Buku</label>
                                    <input type="text" class="form-control" name="judul" id="judul" value="<?= $data['judul_buku']; ?>" />
                                </div>

                                <div class="form-group">
                                    <label for="pengarang">Pengarang</label>
                                    <input type="text" class="form-control" name="pengarang" id="pengarang" value="<?= $data['pengarang']; ?>" />
                                </div>

                                <div class="form-group">
                                    <label>Jenis Buku</label>
                                    <select name="jenis" class="form-control">
                                        <option class="alert-danger" value="<?= $data['jenis_buku']; ?>"><?= $data['jenis_buku']; ?></option>
                                        <option value="Pendidikan">Pendidikan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="penerbit">Penerbit</label>
                                    <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?= $data['penerbit']; ?>" />
                                </div>
                                <button type="submit" class="btn btn-success">Ubah Data</button>
                            </form>
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
