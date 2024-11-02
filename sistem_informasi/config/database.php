<?php
// config/database.php
return [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'sistem_informasi'
];

// Fungsi untuk menghubungkan ke database
function getDatabaseConnection() {
    $config = include 'database.php';
    $conn = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    return $conn;
}
