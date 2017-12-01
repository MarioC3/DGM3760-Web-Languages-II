<?php
require_once('authorize.php');
require_once('appvars.php');
require_once('connectvars.php');

$id = $_GET['id'];

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error connecting to MySQL Server");

$query = "UPDATE soccerPlayers SET approved=1 WHERE id=$id";
$result = mysqli_query($dbc, $query) or die('Error querying Database');

header( "refresh:2;url=updateRecords.php" );

include 'approveRecord.view.php';
