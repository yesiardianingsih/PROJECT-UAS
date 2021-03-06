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

    <title>Tambah Buku</title>

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
                    <h1 class="page-head-line">Tambah Buku</h1>
                </div>
            </div>
            <?php 
                if (!empty($_GET['message']) && $_GET['message'] == 'info') {
                  echo '<span class="col-md-12 alert alert-success text-center"><h4>Berhasil menambah data!</h4></span>';
                }
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="post" action="insert_buku.php">
                                <div class="form-group">
                                    <label for="kode">Kode Buku</label>
                                    <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode Buku" />
                                </div>

                                <div class="form-group">
                                    <label for="judul">Judul Buku</label>
                                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Buku" />
                                </div>

                                <div class="form-group">
                                    <label for="pengarang">Pengarang</label>
                                    <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Pengarang" />
                                </div>

                                <div class="form-group">
                                    <label>Jenis Buku</label>
                                    <select name="jenis" class="form-control">
                                        <option>---- Pilih Jenis Buku ----</option>
                                        <option value="Pendidikan">Pendidikan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="penerbit">Penerbit</label>
                                    <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Penerbit" />
                                </div>
                                <button type="submit" class="btn btn-info">Simpan Data</button>
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