<?php
session_start();
require_once '../config.php';
require_once '../components/header.php';
require_once '../components/sidebar.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employee_id = $_SESSION['user_id'];
    $action = $_POST['action'];

    if ($action === 'clock_in') {
        $stmt = $conn->prepare("INSERT INTO attendance (employee_id, clock_in) VALUES (?, NOW())");
        $stmt->bind_param("i", $employee_id);
        $stmt->execute();
        $_SESSION['notification'] = "Clock In berhasil.";
    } elseif ($action === 'clock_out') {
        $stmt = $conn->prepare("UPDATE attendance SET clock_out = NOW() WHERE employee_id = ? AND DATE(clock_in) = CURDATE()");
        $stmt->bind_param("i", $employee_id);
        $stmt->execute();
        $_SESSION['notification'] = "Clock Out berhasil.";
    }
}
?>

<div class="main-content">
    <h1>Attendance Management</h1>
    <form method="POST">
        <button name="action" value="clock_in">Clock In</button>
        <button name="action" value="clock_out">Clock Out</button>
    </form>
</div>

<?php include '../components/footer.php'; ?>
