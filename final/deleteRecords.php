<?php

require_once('appvars.php');
require_once('connectvars.php');

$id = $_GET['id'];
$name = $_GET['name'];

include 'deleteRecords.view.php';
