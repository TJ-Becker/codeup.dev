<?php
date_default_timezone_set ('America/Chicago');
function logMessage($logLevel, $message)
{
    // todo - complete this function

        $date = date('Y-n-d');
        $handle = fopen($date, 'a');
        fwrite($handle, $date . ' [' . $logLevel . '] ' . $message . PHP_EOL);
}

function logInfo($message) {
    logMessage('INFO', $message);
}

function logError($message) {
    logMessage('ERROR', $message);
}

logInfo("This is an info message.");
logError("This is an error message.");
