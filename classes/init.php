<?php

session_name(APP_NAME);
if (!session_start()) { die('Session not able to start error, probably a server configuration problem. Could also be old version of php.'); } ;
$_SESSION['LAST_ACTIVITY'] = time();
ob_start();
ini_set('display_errors', 1 );
ini_set("session.cookie_lifetime","43200");
error_reporting(E_ALL);
mt_srand(time());
date_default_timezone_set('America/Chicago');
set_exception_handler('exception_handler');
function exception_handler($e) { echo "Uncaught exception: " . substr($e->getMessage(),0,45) . "\n"; }
