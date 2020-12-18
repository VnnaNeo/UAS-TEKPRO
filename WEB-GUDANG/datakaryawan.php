<?php

$db = mysqli_connect("localhost", "root", "", "gudangit" );
$query = mysqli_query($db, "SELECT * FROM id_pengguna");
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="images/office.png">
        <title>Data Karyawan</title>
    </head>
    <body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="halutama.php">IT World</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gudang
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="databrg.php">Data Barang</a>
            <a class="dropdown-item" href="barang.php">Data Barang Masuk</a>
            <a class="dropdown-item" href="datakeluar.php">Data Barang Keluar</a>
            
            <div class="dropdown-divider"></div>
            </div>
        </li>
    </ul>
    </div>

    </div>
    <div class="container">
        <center><h2>DATA KARYAWAN</h2></center>
        <table class="table table-hover">
        <thead class="thead-dark">
        <tr>
        <th scope="col">ID Pengguna</th>
        <th scope="col">Nama Karyawan</th>
        <th scope="col">Email Karyawan</th>
        <th scope="col">Nomor Telepon</th>
        <th scope="col">Password</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
        </thead>
        <?php while($row=mysqli_fetch_assoc($query)){ ?>

        <tbody>
        <tr>
        <td scope="col"><?php echo $row['ID_Pengguna']; ?> </td>
        <td><?php echo $row['Nama']; ?> </td>
        <td><?php echo $row['Email']; ?> </td>
        <td><?php echo $row['No_Telepon']; ?> </td>
        <td><?php echo $row['Password']; ?> </td>
        </tr>
        <?php } ?>
        </table>
    
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