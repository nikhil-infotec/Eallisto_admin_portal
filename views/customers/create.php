<?php
require dirname(__DIR__, 2) . '/config/database.php';
if (!$_SESSION['logged_in']) header("Location: ../public/index.php");
?>
<h3>Create Customer</h3>
<form action="../controllers/CustomerController.php" method="POST">
    <input name="name" placeholder="Name" required><br><br>
    <input name="phone" placeholder="Phone"><br><br>
    <input name="email" placeholder="Email"><br><br>
    <textarea name="address" placeholder="Address"></textarea><br><br>
    <button type="submit">Save</button>
</form>
