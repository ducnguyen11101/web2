<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'db_cuahangthoitrang';

$conn = new mysqli($server, $user, $pass, $database);

if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}
