<?php
session_start();
require_once '../config.php';
require_once '../components/header.php';
require_once '../components/sidebar.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    echo "Akses ditolak.";
    exit;
}
?>

<div class="main-content">
    <h1>System Configuration</h1>
    <p>Halaman ini digunakan untuk mengelola pengaturan sistem.</p>
</div>

<?php include '../components/footer.php'; ?>
