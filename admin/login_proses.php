<?php
session_start();
include '../config/koneksi.php';

$username = addslashes($_POST['username']);
$pass = $_POST['password']; // Menghilangkan md5 jika tidak menggunakan hash

$user = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$pass'");

if (!$user) {
    die("Error pada query: " . mysqli_error($conn));
}

$chek = mysqli_num_rows($user);
if ($chek > 0) {
    $row = mysqli_fetch_array($user);
    $_SESSION['password'] = $row['password'];
    header("Location: index.php");
} else {
    header("Location: login.php?pesan=gagal");
}
