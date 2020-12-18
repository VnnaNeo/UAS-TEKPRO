<?php

$conn = mysqli_connect("localhost", "root", "", "gudangit" );

function registrasi($data) {
    global $conn;
    $nama =mysqli_real_escape_string($conn, $data["nama"]);
    $email = mysqli_real_escape_string($conn, $data["email"]);
    $notelp = mysqli_real_escape_string($conn, $data["notelp"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek email exist or not
    $result = mysqli_query($conn, "SELECT Email FROM id_pengguna WHERE Email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Karyawan sudah terdaftar! silahkan daftar dengan Email yang berbeda');
                </script>";
            return false;
    }

    //cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
            alert('Konfirmasi Password Tidak sesuai! Silahkan Ulangi');
            </script>";
        return false;
    } 

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user ke db
    mysqli_query($conn, "INSERT INTO id_pengguna VALUES('','$nama', '$email', '$notelp', '$password')");

    return mysqli_affected_rows($conn);

}