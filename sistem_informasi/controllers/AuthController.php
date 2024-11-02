<?php
// controllers/AuthController.php
session_start();
require_once '../config/database.php';

class AuthController {
    public static function login($username, $password) {
        $conn = getDatabaseConnection();

        $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                return true;
            }
        }
        return false;
    }

    public static function logout() {
        session_destroy();
    }
}
