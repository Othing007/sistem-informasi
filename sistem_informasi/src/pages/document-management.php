<?php
session_start();
require_once '../config.php';
require_once '../components/header.php';
require_once '../components/sidebar.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<div class="main-content">
    <h1>Document Management</h1>
    <p>Halaman ini untuk mengelola dokumen yang ada dalam sistem.</p>
</div>

<?php include '../components/footer.php'; ?>
