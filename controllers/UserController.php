<?php
require_once __DIR__ . '/../models/User.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$userModel = new User($conn);

$users = $userModel->getAllUsers();
