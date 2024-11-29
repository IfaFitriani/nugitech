<?php
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: ../index.html");
} else {
    echo "<script>alert('Akun tidak ditemukan,Periksa kembali email dan password anda'); window.location.href='../login.html';</script>";
}
?>


