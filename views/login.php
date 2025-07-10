<?php if (isset($_SESSION['error'])) echo "<p style='color:red;'>{$_SESSION['error']}</p>"; ?>
<form action="../controllers/AuthController.php" method="POST">
    <input name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>
