<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = 'admin';
    $password = 'password';
    
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $_POST['username'];
        setcookie('login', $_POST['username'], time() + (86400 * 30), "/");
        header('Location: index.php');
    } else {
        echo "Invalid login credentials.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
