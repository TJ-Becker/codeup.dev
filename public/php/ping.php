<?php
    require_once 'functions.php';
    function pageController()
    {
        $data['counter'] = inputGet('counter', 0);
        return $data;
    }
    extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ping</title>
</head>
<body>
    <h1>Volleys: <?=(int)$counter; ?></h1>
    <a href="pong.php?counter=<?= $counter + 1; ?>">Hit</a>
    <a href="pong.php?counter=0">Miss</a>
</body>
</html>