<?php
session_start();
require_once '../config.php';
require_once '../components/header.php';
require_once '../components/sidebar.php';
require_once '../components/notifications.php';

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<div class="main-content">
    <h1>Dashboard</h1>
    <div class="summary">
        <div class="summary-card">
            <h3>Total Karyawan</h3>
            <p>125</p>
        </div>
        <div class="summary-card">
            <h3>Dokumen Terbaru</h3>
            <p>23</p>
        </div>
        <div class="summary-card">
            <h3>Kehadiran Hari Ini</h3>
            <p>98%</p>
        </div>
    </div>
</div>

<?php include '../components/footer.php'; ?>
