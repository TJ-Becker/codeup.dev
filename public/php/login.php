<?php
function pageController() {
    $data = [];
    $data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
    $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
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
        <label>Number</label>
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>