<?php
require '../config/database.php';
session_start();

$username = $_POST['username'] ?? '';
$password = md5($_POST['password'] ?? '');

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['logged_in'] = true;
    header("Location: ../public/index.php?page=dashboard");
} else {
    $_SESSION['error'] = "Invalid credentials.";
    header("Location: ../public/index.php");
}
?>
