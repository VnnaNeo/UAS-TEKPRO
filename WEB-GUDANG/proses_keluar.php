<?php
//yg ini bagian updatenya
$db = mysqli_connect("localhost", "root", "", "gudangit" );
    $tanggal_barang = $_POST['tanggal_keluar'];
    $id_barang = $_POST['id_brg'];
    $jumlah_keluar = $_POST['jumlah_keluar'];


    $que = mysqli_query($db,"select * from barang where id_barang ='$id_barang' ");
    $barang = mysqli_fetch_array($que);

    
    $nama_barang = $barang['nama_barang'];
    $stok_lama = $barang['stok'];
    $stok_baru = $stok_lama - $jumlah_keluar;
    $query = mysqli_query($db, "INSERT INTO barang_keluar VALUES ('','$tanggal_barang','$nama_barang','$jumlah_keluar')");
    $update_stok = mysqli_query($db,"UPDATE barang SET stok ='$stok_baru' Where id_barang='$id_barang' ");

    if (mysqli_affected_rows($db)) {
        echo "
        <script>
        alert('BARANG BERHASIL KELUAR')
        document.location.href='datakeluar.php'
        </script>
        ";
    } else {
        echo "
        <script>
        alert('DATA TIDAK BERHASIL DIUBAH')
        document.location.href='datakeluar.php'
        </script>
        ";
    }

?>