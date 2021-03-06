<?php

$db = mysqli_connect("localhost", "root", "", "gudangit" );
if(isset($_POST['save'])) {
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['namabarang'];
    $jenis = $_POST['jenisbarang'];
    $merek = $_POST['merek'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];
    $stok = $_POST['stok'];
    $query = mysqli_query($db, "INSERT INTO barang VALUES ('','$tanggal','$nama','$jenis','$merek','$harga','$satuan','$stok')");
    if (mysqli_affected_rows($db)) {
        echo "
        <script>
        alert('DATA BERHASIL DISIMPAN')
        </script>
        ";
    } else {
        echo "
        <script>
        alert('DATA TIDAK BERHASIL DISIMPAN')
        </script>
        ";
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
    <link rel="icon" type="image/png" href="images/office.png">
    <link rel="stylesheet" type="text/css" href="tmbh_brg.css">
    <title>Masukkan Barang</title>
    </head>
    
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="tambah.php">IT World</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <a href="barang.php" class="btn btn-danger" name="logout">SELESAI</a>
</nav>
    <div class="container">
        <h4 class="text-center">Masukkan Deskripsi Barang</h4>
        <hr>

    <form action ="" method="POST">
    <div class="form-group">
            <label>Tanggal</label>
            <input type="date" required name="tanggal" class="form-control">
        </div>

        <div class="form-group">
            <label>Nama</label>
            <input type="text" required name="namabarang" class="form-control" placeholder="Masukkan Nama Barang">
        </div>

        <div class="form-group">
            <label>Jenis</label>
            <input type="text" required name="jenisbarang" class="form-control" placeholder="Masukkan Jenis Barang">
        </div>

        <div class="form-group">
            <label>Merek</label>
            <input type="text" required name="merek" class="form-control" placeholder="Masukkan Merek Barang">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="text" required name="harga" class="form-control" placeholder="Masukkan Harga Barang">
        </div>

        <div class="form-group">
            <label>Satuan</label>
            <input type="text" required name="satuan" class="form-control" placeholder="Masukkan Satuan Barang">
        </div>
        
        <div class="form-group">
            <label>Stok</label>
            <input type="text" required name="stok" class="form-control" placeholder="Masukkan Stok Barang">
        </div>
            <button type="submit" class="btn btn-success" name="save">SIMPAN</button>
            <button type="reset" class="btn btn-danger">ULANG</button>
    </form>
    </div>
    
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <s src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></s>
    <s src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></s>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <s src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></s>
    <s src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></s>
    <s src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></s>
    -->
</body>
</html>