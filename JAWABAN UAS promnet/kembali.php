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

    <title>Pengembalian Buku</title>

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
                            <li><a href="home.php">Home</a></li>
                            <li><a href="pinjam.php">Meminjam Buku</a></li>
                            <li><a class="menu-top-active" href="kembali.php">Mengembalikan Buku</a></li>
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
                    <h1 class="page-head-line">Pengembalian</h1>
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
                            <form method="post" action="mengembalikan.php">
                                <?php 
                                    $username = $_SESSION['username'];
                                    $query = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'") or die(mysqli_error());

                                    $data = mysqli_fetch_array($query);
                                ?>
                                <div class="form-group">
                                    <label for="id_user">Nama Peminjam</label>
                                    <input type="hidden" class="form-control" readonly name="id_user" id="id_user" value="<?= $data['id']; ?>" />
                                    <input type="text" class="form-control" readonly value="<?= $data['nama']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="kode">Kode Buku</label>
                                    <select name="kode" class="form-control">
                                        <option>---- Pilih Buku ----</option>
                                        <?php 
                                            $query = mysqli_query($connect, "SELECT * FROM buku");
                                            while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <option value="<?= $data['id']; ?>">
                                            <?= $data['kode_buku']; ?> = <?= $data['judul_buku']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jml_kembali">Jumlah</label>
                                    <input type="text" class="form-control" name="jml_kembali" id="jml_kembali" placeholder="Jumlah" />
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