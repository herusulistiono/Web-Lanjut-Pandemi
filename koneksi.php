<?php
$server   = 'localhost';
$username = 'heru';
$password = 'kosong';
$database = 'web2';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die('Gagal terhubung: ' . mysqli_connect_error());
}
?>