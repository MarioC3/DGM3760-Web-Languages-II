<?php

require_once('appvars.php');
require_once('connectvars.php');

$id = $_POST['id'];
$name = $_POST['name'];
$twitterHandle = $_POST['twitterHandle'];
$twitterLink = $_POST['twitterLink'];
$bio = $_POST['bio'];
// $image = $_POST['image'];
// $target = SP_UPLOADPATH . $image;

if (isset($_POST['submit'])) {
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error connecting to MySQL Server");
    $query = "UPDATE soccerPlayers SET name='$name', twitterHandle='$twitterHandle', twitterLink='$twitterLink', bio='$bio' WHERE id=$id";
    $result = mysqli_query($dbc, $query) or die('Error querying Database');
    @unlink($_POST['image']);
    
}

header( "refresh:2;url=updateRecords.php" );

include 'updateDatabase.view.php';