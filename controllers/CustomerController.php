<?php
require '../config/database.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT INTO customers (name, phone, email, address) VALUES ('$name', '$phone', '$email', '$address')";
$conn->query($sql);

header("Location: ../public/index.php?page=customers");
?>