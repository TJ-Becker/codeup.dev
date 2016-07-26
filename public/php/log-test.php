<?php
require_once 'Log.php';
date_default_timezone_set ('America/Chicago');
$date = date('Y-n-d');
$log = new Log('cli');
$log->filename = $date . '.log';
$log->info('This is an info message.');
$log->error('This is an error message.');