<?php
require_once 'functions.php';
require_once 'luis-functions.php';
function pageController()
{
    $data = [];
    $data['option'] = inputGet('option');
    $data['addName'] = inputGet('addName', "");
    $data['addNumber'] = inputGet('addNumber', "");
    $data['search'] = inputGet('search');
    $data['delete'] = inputGet('delete');
    $data['invalid'] = inputGet('invalid', false);
    $data['key'] = inputGet('key');
    return $data;
}

extract(pageController());
$contacts = loadContacts();
$contacts = formatContacts($contacts);

if ((isset($addName) && isValidName($addName)) && (isset($addNumber)) && isValidPhoneNumber($addNumber)) {
    addContact($contacts, $addName, $addNumber, uniqid());
    $contacts = formatContacts($contacts);
    saveContacts($contacts);
    unset($addName);
    unset($addNumber);
} else if (isValidName($addName) || isValidPhoneNumber($addNumber)){
    $invalid = true;
}

if (isset($search)) {
    $contacts = findContact($contacts, $search);
}
if (isset($delete)) {
    deleteContacts($contacts, $delete, $key);
    saveContacts($contacts);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
        crossorigin="anonymous"
    >
    <title>Contacts manager</title>
</head>
<body>
<div class="container">
    <section class="row">
        <div class="col-md-8">
            <header class="page-header">
                <h1>Contacts Manager</h1>
            </header>
        </div>
        <div class="col-md-4" style="padding-top: 3.5em">
            <form class="form-inline" method="POST">
                <div class="form-group">
                    <input
                        type="text"
                        class="form-control"
                        id="search-name"
                        placeholder="John Doe"
                        name="search"
                    >
                </div>
                <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search" aria-hidden="true">
                            </span>
                    Search
                </button>
            </form>
        </div>
    </section>
    <article class="row contacts">
        <section class="col-md-6">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($contacts as $key => $contact) : ?>
                        <tr>
                            <td><?= $contact['name'] ?> </td>
                            <td><?= $contact['number'] ?></td>
                            <td>
                                <!-- The query string for this one should contain the contact name -->
                                <a class="btn btn-danger" href="?delete=<?= trim($contact['name']) ?>&key=<?= $key ?>">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true">
                            </span>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
        <?php if ($invalid) : ?>
        <section class="col-md-6">
            <p>Invalid entry.  Phone numbers must be either 7 or 10 digits in length.  The name field must not be empty.</p>
        </section>
        <?php endif; ?>
        <section class="col-md-6">
            <form method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">
                        Name
                    </label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control"
                            name="addName"
                            id="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="number" class="col-sm-2 control-label">
                        Number
                    </label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control"
                            name="addNumber"
                            id="number">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
                                    </span>
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </article>
</div>
<script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"
></script>
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
    crossorigin="anonymous"
></script>
</body>
</html>