<?php
require dirname(__DIR__, 2) . '/config/database.php';
if (!$_SESSION['logged_in']) header("Location: ../public/index.php");
?>
<h3>Invoice List</h3>
<a href="index.php?page=add_invoice">Add New Invoice</a>
<table border="1" cellpadding="5" cellspacing="0">
<tr><th>ID</th><th>Customer</th><th>Date</th><th>Amount</th><th>Status</th></tr>
<?php
$sql = "SELECT invoices.*, customers.name AS customer_name 
        FROM invoices 
        LEFT JOIN customers ON invoices.customer_id = customers.id";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['customer_name']}</td>
        <td>{$row['date']}</td>
        <td>{$row['amount']}</td>
        <td>{$row['status']}</td>
    </tr>";
}
?>
</table>
