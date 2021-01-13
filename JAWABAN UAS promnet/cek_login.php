<?php
    include('connect.php');

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    //cek data yang dikirim, apakah kosong atau tidak
    if (empty($username) && empty($password)) {
        //kalau username dan password kosong
        header('location:index.php?error=1');
    } else if (empty($username)) {
        //kalau username saja yang kosong
        header('location:index.php?error=2');
    } else if (empty($password)) {
        //kalau password saja yang kosong
        header('location:index.php?error=3');
    }

    $query = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
        if ($data['role'] == "Admin") {
            $_SESSION['username'] = $username;
            header('location:dashboard.php');
        } else {
            $_SESSION['username'] = $username;
            header('location:home.php');
        }
        
        
        
    } else {
        //kalau username ataupun password tidak terdaftar di database
        header('location:index.php?error=4');
    }
?>
