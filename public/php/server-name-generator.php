<?php
function pageController() {
    $data['adjectives'] = [
        'Big',
        'Happy',
        'Red',
        'Small',
        'Sarcastic',
        'Lovely',
        'Fast',
        'Soft',
        'Smelly',
        'Athletic'
    ];
    $data['nouns'] = [
        'Kitten',
        'Hippo',
        'Egg',
        'Bulbasaur',
        'TJ',
        'Foot',
        'Penny',
        'Mouse',
        'Frog',
        'Cowboy'
    ];

    function randomElement($array) {
        $count = count($array) - 1;
        $random = mt_rand(0, $count);
        return $array[$random];
    }

    function serverName($adjective, $noun) {
        return "{$adjective} {$noun}";
    }
    return $data;
}
extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>
</head>
<body>
<h1>
    <?= serverName(randomElement($adjectives), randomElement($nouns)); ?>
</h1>


</body>
</html>