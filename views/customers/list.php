<?php
require dirname(__DIR__, 2) . '/config/database.php';
if (!$_SESSION['logged_in']) header("Location: ../public/index.php");
?>
<h3>Customer List</h3>
<a href="index.php?page=add_customer">Add New Customer</a>
<table border="1" cellpadding="5" cellspacing="0">
<tr><th>ID</th><th>Name</th><th>Phone</th><th>Email</th><th>Address</th></tr>
<?php
$res = $conn->query("SELECT * FROM customers");
while ($row = $res->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['email']}</td>
        <td>{$row['address']}</td>
    </tr>";
}
?>
</table>
