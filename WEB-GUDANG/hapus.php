<?php
$db = mysqli_connect("localhost","root","","gudangit" );
$id_brg = $_GET['id_barang'];
$query = mysqli_query($db, "DELETE FROM barang where id_barang = '$id_brg'");

if (mysqli_affected_rows($db)) {
    echo "
    <script>
    alert('DATA BERHASIL DIHAPUS')
    document.location.href='barang.php'
    </script>
    ";
} else {
    echo "
    <script>
    alert('DATA TIDAK BERHASIL DIHAPUS')
    document.location.href='barang.php'
    </script>
    ";
}
?>
