<?php
require '../config/database.php';
header('Content-Type: application/json');

$type = $_GET['type'];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($type === 'customers') {
        $result = $conn->query("SELECT * FROM customers");
        echo json_encode($result->fetch_all(MYSQLI_ASSOC));
    }
    elseif ($type === 'invoices') {
        $result = $conn->query("SELECT * FROM invoices");
        echo json_encode($result->fetch_all(MYSQLI_ASSOC));
    }
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    if ($type === 'customers') {
        $sql = "INSERT INTO customers (name, phone, email, address) 
                VALUES ('{$data['name']}', '{$data['phone']}', '{$data['email']}', '{$data['address']}')";
    }
    elseif ($type === 'invoices') {
        $sql = "INSERT INTO invoices (customer_id, date, amount, status)
                VALUES ('{$data['customer_id']}', '{$data['date']}', '{$data['amount']}', '{$data['status']}')";
    }
    $conn->query($sql);
    echo json_encode(['success' => true]);
}
?>
