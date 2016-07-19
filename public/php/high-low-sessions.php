<?php
    session_start();
    function pageController() {
        $data = [];
        if (!isset( $_SESSION['guess'])) {
            $_SESSION['guess'] = "-";
        }
        $_SESSION['answer'] = isset($_SESSION['answer']) ? $_SESSION['answer'] : mt_rand(1, 100);
        $data['answer'] = $_SESSION['answer'];
        $_SESSION['guess'] = isset($_POST['guess']) ? $_POST['guess'] :  $_SESSION['guess'];
        $data['guess'] = htmlspecialchars(strip_tags($_SESSION['guess']));
        return $data;
    }
    extract(pageController());
    function highLow($guess, $answer) {
        $target;
        if ($guess == $answer) {
            $message = 'Correct!';
        } else if ($guess === "-") {
            $message = 'Awaiting your guess.';
        } else if ($guess > $answer) {
            $message = 'Lower';
        } else if ($guess < $answer) {
            $message = 'Higher';
        }
        return $message;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>High Low Game</title>
</head>
<body>
<h1>Guess a number between 1 and 100!</h1>
<p>Current Guess: <?= $guess ?></p>
<p><?= highLow($guess, $answer); ?></p>
<form method="POST">
    <label>Guess</label>
    <input type="text" name="guess">
    <input type="submit">
</form>
<a href="reset.php">Reset Game</a>
</body>
</html>
