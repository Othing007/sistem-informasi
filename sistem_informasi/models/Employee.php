<?php
// models/Employee.php
require_once '../config/database.php';

class Employee {
    private $conn;

    public function __construct() {
        $this->conn = getDatabaseConnection();
    }

    public function create($name, $department, $job_title) {
        $stmt = $this->conn->prepare("INSERT INTO employees (name, department, job_title) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $department, $job_title);
        return $stmt->execute();
    }

    public function getAll() {
        $result = $this->conn->query("SELECT * FROM employees");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
