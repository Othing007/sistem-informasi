<!-- src/components/notifications.php -->
<?php if (isset($_SESSION['notification'])): ?>
    <div class="notification">
        <p><?php echo htmlspecialchars($_SESSION['notification']); ?></p>
    </div>
    <?php unset($_SESSION['notification']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <div class="error">
        <p><?php echo htmlspecialchars($_SESSION['error']); ?></p>
    </div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>
