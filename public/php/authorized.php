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
<h1><?php if ($username == 'guest' && $password == 'password') {
        echo 'Authorized.';
    } else {
        echo 'Failure.  Loggin info not correct.';
    }
    ?></h1>
</body>
</html>
