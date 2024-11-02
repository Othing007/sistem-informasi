<?php
// helpers/SessionHelper.php

function checkUserSession() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../pages/login.php");
        exit;
    }
}

function setNotification($message) {
    $_SESSION['notification'] = $message;
}
