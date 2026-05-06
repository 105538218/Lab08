<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.inc'; ?>
</head>

<body>
    <h2>Login</h2>
    <form method="post" action ="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="hidden" name="token" value="L105538218">
    <input type="submit" value="Login">
    </form>
</body>