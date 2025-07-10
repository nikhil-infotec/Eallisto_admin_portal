<?php
require dirname(__DIR__, 2) . '/config/database.php';
if (!$_SESSION['logged_in']) header("Location: ../public/index.php");
?>
<h3>Create Custom Field</h3>
<form action="../controllers/CustomFieldController.php" method="POST">
    <label>Module:</label>
    <select name="module" required>
        <option value="Customer">Customer</option>
        <option value="Invoice">Invoice</option>
    </select><br><br>

    <label>Name:</label>
    <input name="name" required><br><br>

    <label>Type:</label>
    <select name="type" required>
        <option value="Text">Text</option>
        <option value="Date">Date</option>
        <option value="Decimal">Decimal</option>
        <option value="Dropdown">Dropdown</option>
        <option value="Lookup">Lookup</option>
    </select><br><br>

    <label>Options (comma or JSON for Dropdown/Lookup):</label>
    <input name="options"><br><br>

    <button type="submit">Save Field</button>
</form>