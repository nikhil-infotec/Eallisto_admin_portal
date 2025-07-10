<?php
require dirname(__DIR__, 2) . '/config/database.php';
if (!$_SESSION['logged_in']) header("Location: ../public/index.php");
?>
<h3>Create Invoice</h3>
<form action="../controllers/InvoiceController.php" method="POST">
    <label>Customer:</label>
    <select name="customer_id" required>
        <option value="">Select Customer</option>
        <?php
        $customers = $conn->query("SELECT id, name FROM customers");
        while ($cust = $customers->fetch_assoc()) {
            echo "<option value='{$cust['id']}'>{$cust['name']}</option>";
        }
        ?>
    </select><br><br>

    <label>Date:</label>
    <input type="date" name="date"><br><br>

    <label>Amount:</label>
    <input type="number" step="0.01" name="amount"><br><br>

    <label>Status:</label>
    <select name="status">
        <option value="Unpaid">Unpaid</option>
        <option value="Paid">Paid</option>
        <option value="Cancelled">Cancelled</option>
    </select><br><br>

    <button type="submit">Save Invoice</button>
</form>
