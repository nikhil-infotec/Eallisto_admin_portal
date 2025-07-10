<?php
require '../config/database.php';

$module = $_POST['module'];
$name = $_POST['name'];
$type = $_POST['type'];
$options = $_POST['options'] ?? '';

$sql = "INSERT INTO custom_fields (module, name, type, options) VALUES ('$module', '$name', '$type', '$options')";
$conn->query($sql);

header("Location: ../public/index.php?page=custom_fields");
?>
