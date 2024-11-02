<?php
// models/User.php
require_once '../config/database.php';

class User {
    private $conn;

    public function __construct() {
        $this->conn = getDatabaseConnection();
    }

    public function findByUsername($username) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
