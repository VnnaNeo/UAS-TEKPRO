<?php
require 'functions.php';

if( isset($_POST["login"]) ) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $result = mysqli_query($conn, "SELECT * FROM id_pengguna WHERE Email = '$email' ");
    //cek email
    if (mysqli_num_rows($result) == 1 ) {

        //cek password
        $row = mysqli_fetch_assoc($result);

        if ( password_verify($password, $row["Password"]) ) {
            header("Location: halutama.php");
            exit;
        }else{
            echo "<script>alert('Email/Password Anda Salah');</script>";
        }
    }
    $error = true;
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
    
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="icon" type="image/png" href="images/office.png">
    <title>Masuk Akun</title>
    </head>
    
    <body>
    <div class="container bg-dark">
        <h4 class="text-center">KARYAWAN GUDANG IT</h4>
        <hr>
    
        
    <form action = "" method="POST">
        <div class="form-group">
        <label>Email</label>
        <input type="text" required name="email" id="email" class="form-control" placeholder="Masukkan Alamat Email Anda">
        </div>

        <div class="form-group">
            <label>Kata Sandi</label>
            <input type="password" required name="password" id="password" class="form-control" placeholder="Masukkan Kata Sandi Anda">
            </div>

            <button type="submit" class="btn btn-success" name="login">Masuk</button>
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