
<?php


$conn = mysqli_connect("localhost", "root", "", "gudangit" );
$q = mysqli_query($conn,"select * from barang ");

?>

<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/office.png">
    <link rel="stylesheet" type="text/css" href="tmbh_brg.css">
    <title>Masukkan Barang</title>
    </head>
    
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="tambah.php">IT World</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <a href="datakeluar.php" class="btn btn-danger" name="logout">SELESAI</a>
</nav>
    <div class="container">
        <h4 class="text-center">Pengeluaran Barang</h4>
        <hr>

    <form action ="proses_keluar.php" method="POST">


    <div class="form-group">
            <label>Tanggal Pengeluaran</label>
            <input type="date" required name="tanggal_keluar" class="form-control"    </div>


        <div class="form-group">
        <label>Nama Barang</label>
        
            <select required name="id_brg" class="form-control" >
            
                  <?php
                        while($barang = mysqli_fetch_array($q)){
                ?>
                <option value="<?php echo $barang['id_barang'];?> "> <?php echo $barang['nama_barang'];?> </option>
                <?php
                        }

                ?>                
                </option>
            </select>

        </div>
        
      

        <div class="form-group">
            <label>Jumlah Stok yang Keluar</label>
            <input type="number" required name="jumlah_keluar" class="form-control" placeholder="Masukkan Stok Barang" >

        </div>
            <button type="submit" class="btn btn-success" >SIMPAN</button>
            <button type="reset" class="btn btn-danger">KEMBALI DATA AWAL</button>
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