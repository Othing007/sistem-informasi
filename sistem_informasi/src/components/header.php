<!-- src/components/header.php -->
<header class="header">
    <div class="header-content">
        <img src="../public/img/icons/logo.png" alt="Logo" class="logo">
        <h1>Sistem Informasi</h1>
        <div class="user-info">
            <?php if (isset($_SESSION['user_name'])): ?>
                <span>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                <a href="../pages/logout.php" class="logout-button">Logout</a>
            <?php else: ?>
                <a href="../pages/login.php" class="login-button">Login</a>
            <?php endif; ?>
        </div>
    </div>
</header>
