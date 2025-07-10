<?php
session_start();

$page = $_GET['page'] ?? 'login';

switch ($page) {
    case 'dashboard':
        require '../views/dashboard.php';
        break;
    case 'customers':
        require '../views/customers/list.php';
        break;
    case 'add_customer':
        require '../views/customers/create.php';
        break;
    case 'invoices':
        require '../views/invoices/list.php';
        break;
    case 'add_invoice':
        require '../views/invoices/create.php';
        break;
    case 'custom_fields':
        require '../views/custom_fields/list.php';
        break;
    case 'add_custom_field':
        require '../views/custom_fields/create.php';
        break;
    case 'logout':
        session_destroy();
        header("Location: index.php");
        break;
    default:
        require '../views/login.php';
}
?>
