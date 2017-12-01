<?php

require_once('appvars.php');
require_once('connectvars.php'); 

if (isset($_POST['submit'])) {
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error connecting to MySQL Server");
    $query = "DELETE FROM soccerPlayers WHERE id = $_POST[id]";
    $result = mysqli_query($dbc, $query) or die('Error querying Database');
    @unlink($_POST['image']);
    
}

header( "refresh:2;url=updateRecords.php" );

include 'confirmation2.view.php';