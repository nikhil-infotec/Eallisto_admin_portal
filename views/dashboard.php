<?php if (!$_SESSION['logged_in']) header("Location: index.php"); ?>
<h2>Admin Dashboard</h2>
<ul>
    <li><a href="index.php?page=customers">Customers</a></li>
    <li><a href="index.php?page=invoices">Invoices</a></li>
    <li><a href="index.php?page=custom_fields">Custom Fields</a></li>
    <li><a href="index.php?page=logout">Logout</a></li>
</ul>