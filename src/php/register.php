<?php
require 'koneksi.php';

$fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

$query_sql = "INSERT INTO tbl_users (fullname, username, email, password) 
            VALUES ('$fullname', '$username', '$email', '$password')";

echo "Query: " . $query_sql;

if (mysqli_query($conn, $query_sql)) {
    header("Location: ../login.html");
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
}
?>
