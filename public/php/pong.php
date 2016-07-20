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
    <title>Pong</title>
</head>
<body>
<h1><?= "Volleys: " . $counter; ?></h1>
<a href="ping.php?counter=<?= $counter + 1; ?>">Hit</a>
<a href="ping.php?counter=0">Miss</a>
</body>
</html>