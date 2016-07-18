<?php
function pageController()
{
    if (isset($_GET['counter'])) {
        $data['counter'] = $_GET['counter'];
    } else {
        $data['counter'] = 0;
    }
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