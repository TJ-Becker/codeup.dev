<?php
function pageController()
{
    $data = [];
    $data['favorites'] = [
        'Soccer',
        'Tennis',
        'Food',
        'Coding',
        'Rubber Ducks'
    ];
    return $data;
}

extract(pageController());
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Favorite Things</title>
</head>
<body>
<ol>
    <?php foreach ($favorites as $favorite): ?>
        <li><?= $favorite; ?></li>
    <?php endforeach; ?>
</ol>
</body>
</html>
