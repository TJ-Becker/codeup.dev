<?php
    require_once 'functions.php';
    require_once 'luis-functions.php';
    function pageController() {
        $data = [];
        $data['option'] = inputGet('option');
        $data['name'] = inputGet('name');
        $data['number'] = inputGet('number');
        return $data;
    }
    extract(pageController());
    var_dump($_POST);
    $contacts = loadContacts();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts Manager</title>
</head>
<body>
    <h3>What would you like to do?</h3>
    <form method="POST">
        <select name="option">
            <option>View Contacts</option>
            <option>Add New Contact</option>
            <option>Search for Contacts by Name</option>
            <option>Delete an Existing Contact</option>
        </select>
        <button type="submit">Submit</button>
    </form>
        <?php if ($option == 'View Contacts') { ?>
            <table><?php viewContacts($contacts); ?></table>
        <?php } ?>

        <?php if ($option == 'Add New Contact') {
            echo '<form method="POST">
                      <label for="name">Name</label>
                      <input type="text" name="name">
                      <label for="number">Number</label>
                      <input type="text" name="number">
                      <button type="submit">Add Contact</button>
                  </form>';
        }
            if (isset($name) && isset($number)) {
                newContact($contacts, $name, $number);
                echo "Added $name";
        } ?>

</body>
</html>