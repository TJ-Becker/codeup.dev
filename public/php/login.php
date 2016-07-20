<?php
require_once 'functions.php';
session_start();
function pageController() {
    var_dump($_SESSION);
    if (isset($_SESSION['logged_in'])) {
        header('Location: authorized.php');
    }
    $data = [];
    $data['username'] = escape(inputGet('username', ''));
    $data['password'] = escape(inputGet('password', ''));
    return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="authorized.php">
        <label>Username</label>
        <input type="text" name="username">
        <label>Password</label>
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>