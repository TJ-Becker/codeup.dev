<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks');

require_once 'db_connect.php';

$delete = 'DROP TABLE IF EXISTS national_parks';
$dbc->exec($delete);

$create = 'CREATE TABLE national_parks (
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
name VARCHAR(50) NOT NULL,
location VARCHAR(50) NOT NULL,
date_established DATE NOT NULL,
area_in_acres DOUBLE NOT NULL,
PRIMARY KEY (id)
)';

$dbc->exec($create);