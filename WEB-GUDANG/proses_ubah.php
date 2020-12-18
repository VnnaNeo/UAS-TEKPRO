<?php
//yg ini bagian updatenya
$db = mysqli_connect("localhost", "root", "", "gudangit" );
if (isset($_POST['update'])); {
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['namabarang'];
    $jenis = $_POST['jenisbarang'];
    $merek = $_POST['merek'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];
    $stok = $_POST['stok'];
    $id = $_POST['id'];

    $queryy = mysqli_query($db, "UPDATE barang SET tanggal='$tanggal', nama_barang='$nama', jenis_barang='$jenis', merek='$merek', harga='$harga', satuan='$satuan', stok='$stok' WHERE id_barang='$id'");
    if (mysqli_affected_rows($db)) {
        echo "
        <script>
        alert('DATA BERHASIL DIUBAH')
        document.location.href='databrg.php'
        </script>
        ";
    } else {
        echo "
        <script>
        alert('DATA TIDAK BERHASIL DIUBAH')
        document.location.href='databrg.php'
        </script>
        ";
    }
}
?>