<?php
session_start();
require_once '../config.php';
require_once '../components/header.php';
require_once '../components/sidebar.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    echo "Akses ditolak. Halaman ini hanya dapat diakses oleh admin.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $department = $_POST['department'];
    $job_title = $_POST['job_title'];

    $stmt = $conn->prepare("INSERT INTO employees (name, department, job_title) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $department, $job_title);
    $stmt->execute();
    $_SESSION['notification'] = "Karyawan berhasil ditambahkan.";
}
?>

<div class="main-content">
    <h1>Employee Management</h1>

    <form method="POST">
        <input type="text" name="name" placeholder="Nama Karyawan" required>
        <input type="text" name="department" placeholder="Departemen" required>
        <input type="text" name="job_title" placeholder="Jabatan" required>
        <button type="submit">Tambah Karyawan</button>
    </form>

    <h2>Daftar Karyawan</h2>
    <?php include '../components/tables.php'; ?>
</div>

<?php include '../components/footer.php'; ?>
