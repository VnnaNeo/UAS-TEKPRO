<?php
$db = mysqli_connect("localhost","root","","gudangit" );
$id_trans = $_GET['id_transaksi'];
$query = mysqli_query($db, "DELETE FROM barang_keluar where id_transaksi = '$id_trans'");

if (mysqli_affected_rows($db)) {
    echo "
    <script>
    alert('DATA BERHASIL DIHAPUS')
    document.location.href='datakeluar.php'
    </script>
    ";
} else {
    echo "
    <script>
    alert('DATA TIDAK BERHASIL DIHAPUS')
    document.location.href='datakeluar.php'
    </script>
    ";
}
?>
