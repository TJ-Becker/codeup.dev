<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks');

require_once '../db_connect.php';
require_once '../input.php';

$page = Input::get('page', 1);
$limit = 4;
$offset = ($page * $limit) - $limit;
$sql = "SELECT * FROM national_parks LIMIT $limit OFFSET " . $offset;
$stmt = $dbc->query($sql);
$parksArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmtParks = $dbc->query("SELECT count(*) FROM national_parks");
$rows = $stmtParks->fetchColumn();
$pages = ceil($rows / $limit);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    th {
        font-weight: bold;
    }
</style>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Location</th>
        <th>Date Established</th>
        <th>Area in Acres</th>
    </tr>
    </th>
    <?php foreach ($parksArray as $index => $element) : ?>
        <tr>
            <td> <?= $element['name'] ?></td>
            <td> <?= $element['location'] ?> </td>
            <td> <?= $element['date_established'] ?> </td>
            <td> <?= $element['area_in_acres'] ?> </td>
        </tr>
    <?php endforeach; ?>
</table>
<nav aria-label="Page navigation" class="text-center">
    <ul class="pagination">
        <li>
            <a href="?page=<?= $page <= 1 ? 1 : ($page - 1) ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php for ($i = 1; $i <= $pages; $i++) : ?>
            <li><a href="?page=<?= $i ?>"><?= $i ?></a></li>
        <?php endfor; ?>
            <a href="?page=<?= $page >= $pages ? $pages : ($page + 1) ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
</body>
</html>