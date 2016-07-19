<?php
session_start();
function pageController() {
    $data = [];
    $data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
    $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
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
