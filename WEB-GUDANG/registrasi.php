<?php

require 'functions.php';
    if( isset($_POST["register"]) ) {

        if( registrasi($_POST) > 0 ) {
            echo "<script>
                alert('Karyawan Baru berhasil ditambahkan');
                document.location.href='login.php'
                </script>";
        } else {
            echo mysqli_error($conn);
        }

        }
?>

<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="style/images/office.png">
    <link rel="stylesheet" type="text/css" href="reg.css">
    <title>Daftar Akun</title>
    </head>
    
    <body>
    <div class="container bg-dark">
        <h4 class="text-center">Masukkan Biodata Karyawan</h4>
        <hr>

    <form action ="" method="POST">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" required name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Karyawan">
        </div>

        <div class="form-group">
        <label>Email</label>
        <input type="text" required name="email" class="form-control" placeholder="Masukkan Alamat Email Karyawan">
        </div>

        <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" required name="notelp" class="form-control" placeholder="Masukkan Nomor Telepon Karyawan">
        </div>

        <div class="form-group">
            <label>Kata Sandi</label>
            <input type="password" required name="password" class="form-control" placeholder="Masukkan Kata Sandi Karyawan">
            </div>

        <div class="form-group">
        <label>Kata Sandi</label>
        <input type="password" required name="password2" class="form-control" placeholder="Konfirmasi Password">
        </div>

            <button type="submit" class="btn btn-success" name="register" href="login.php">Daftar</button>
            <a href="index.php" class="btn btn-danger" name="logout">Batal</a>
    </form>
    </div>
    
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
</html>