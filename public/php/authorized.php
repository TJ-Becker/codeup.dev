<?php
require_once 'functions.php';
session_start();
function pageController() {
    $data = [];
    $data['username'] = escape(inputGet('username', ''));
    $data['password'] = escape(inputGet('password', ''));
    if (($data['username'] == 'guest' && $data['password'] == 'password') || isset($_SESSION['logged_in'])) {
        $data['message'] = 'Authorized.';
        $_SESSION['logged_in'] = true;
    } else {
        $data['message'] = 'Failure.  Loggin info not correct.';
    }
    if (!isset($_SESSION['logged_in'])) {
        header('Location: login.php');
    }
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
<h1><?= $message ?></h1>
<a href="logout.php">Log Out</a>
</body>
</html>
