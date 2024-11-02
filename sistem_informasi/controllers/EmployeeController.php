<?php
// controllers/EmployeeController.php
require_once '../config/database.php';
require_once '../models/Employee.php';

class EmployeeController {
    public static function addEmployee($name, $department, $job_title) {
        $employee = new Employee();
        return $employee->create($name, $department, $job_title);
    }

    public static function getEmployees() {
        $employee = new Employee();
        return $employee->getAll();
    }
}
