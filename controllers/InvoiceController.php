<?php
require '../config/database.php';

$customer_id = $_POST['customer_id'];
$date = $_POST['date'];
$amount = $_POST['amount'];
$status = $_POST['status'];

$sql = "INSERT INTO invoices (customer_id, date, amount, status) VALUES ('$customer_id', '$date', '$amount', '$status')";
$conn->query($sql);

header("Location: ../public/index.php?page=invoices");
?>