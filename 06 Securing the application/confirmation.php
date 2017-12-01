<?php
require_once('appvars.php');
require_once('connectvars.php');
//Load variables
$name = $_POST['name'];
$twitterHandle = $_POST['twitterHandle'];
$twitterLink = $_POST['twitterLink'];
$bio = $_POST['bio'];
$image = $_FILES['image']['name'];
$target = SP_UPLOADPATH . $image;
// $date = date('m.d.y');

if($_FILES['image']['name']) {
    if(!$_FILES['image']['error']) {
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['image']['error'];
    }
}

// connect to database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error connecting to MySQL Server");

$query = ("INSERT INTO soccerPlayers VALUES ( 0, '$name', '$twitterHandle', '$twitterLink', '$bio', '$image', default, null)");

mysqli_query($dbc, $query) or die('Error querying Database');

mysqli_close($dbc);

header( "refresh:2;url=addRecords.php" );

include 'confirmation.view.php';