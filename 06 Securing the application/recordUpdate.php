<?php
require_once('appvars.php');
require('connectvars.php');

$id = $_GET['id'];
$name = $_GET['name'];
$twitterHandle = $_GET['twitterHandle'];
$twitterLink = $_GET['twitterLink'];


// connect to database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error connecting to MySQL Server");

// Query the variables
$query = "SELECT * FROM soccerPlayers WHERE id=$id";
$result = mysqli_query($dbc, $query) or die('Error querying Database');
$row = mysqli_fetch_array($result);

include 'recordUpdate.view.php';