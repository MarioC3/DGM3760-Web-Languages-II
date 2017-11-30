<?php
require_once('appvars.php');
require('connectvars.php');
// connect to database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error connecting to MySQL Server");

// Query the variables
$query = "SELECT * FROM soccerPlayers";
$result = mysqli_query($dbc, $query) or die('Error querying Database');

include 'index.view.php';