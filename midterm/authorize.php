<?php

$username = 'admin';
$password = 'admin';

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW']) != $password){
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Up2Date"');
    exit('<h2>Unauthorized access!</h2> Computer Memory Removal Initiated');
}
