<?php

require_once('appvars.php');
require_once('connectvars.php');

$id = $_GET['id'];
$name = $_GET['name'];
 
// $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error connecting to MySQL Server");

// $query = "SELECT * FROM soccerPlayers WHERE id=$id";
// $result = mysqli_query($dbc, $query) or die('Error querying Database');

// $row = mysqli_fetch_array($result);

// if (isset($_POST['submit'])) {
//     $query = "DELETE FROM soccerPlayers WHERE id = $_POST[id]";
//     $result = mysqli_query($dbc, $query) or die('Error querying Database');
//     @unlink($_POST['image']);
//     header("Location: updateRecords.php");
    
//     exit;
// }

include 'deleteRecords.view.php';
