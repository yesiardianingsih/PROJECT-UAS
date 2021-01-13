<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Yesi Login</title>

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
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Please Login To Enter </h4>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="cek_login.php" method="post">
                    <label>Enter Username : </label>
                    <input type="text" name="username" class="form-control" />
                    
                    <label>Enter Password :  </label>
                    <input type="password" name="password" class="form-control" />

                    <hr>
                    <button type="submit" class="btn btn-success btn-lg">Login </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>