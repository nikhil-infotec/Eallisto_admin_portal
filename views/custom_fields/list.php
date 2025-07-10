<?php
require dirname(__DIR__, 2) . '/config/database.php';
if (!$_SESSION['logged_in']) header("Location: ../public/index.php");
?>
<h3>Custom Fields List</h3>
<a href="index.php?page=add_custom_field">Add New Custom Field</a>
<table border="1" cellpadding="5" cellspacing="0">
<tr><th>ID</th><th>Module</th><th>Name</th><th>Type</th><th>Options</th></tr>
<?php
$result = $conn->query("SELECT * FROM custom_fields");
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['module']}</td>
        <td>{$row['name']}</td>
        <td>{$row['type']}</td>
        <td>{$row['options']}</td>
    </tr>";
}
?>
</table>
