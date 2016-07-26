<?php

class Log
{
    public $filename;
    public $handle;
    public function __construct($prefix = 'log-')
    {
        date_default_timezone_set ('America/Chicago');
        $date = date('Y-n-d');
        $this->filename = $prefix . $date . '.log';
        $this->handle = fopen($this->filename, 'a');
    }

    public function info($message) {
        $this->logMessage('INFO', $message);
    }
    public function error($message) {
        $this->logMessage('ERROR', $message);
    }
    public function logMessage($logLevel, $message) {
//        date_default_timezone_set ('America/Chicago');
//        $date = date('Y-n-d');
//        $handle = fopen($this->filename, 'a');
        date_default_timezone_set ('America/Chicago');
        $date = date('Y-n-d');
        fwrite($this->handle, $date . ' [' . $logLevel . '] ' . $message . PHP_EOL);
//        fclose($handle);
    }
    public function __destruct()
    {
        fclose($this->handle);
    }
}