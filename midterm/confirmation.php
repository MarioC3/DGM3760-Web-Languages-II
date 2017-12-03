<?php
require_once('appvars.php');
require_once('connectvars.php');

//Load variables
$name = $_POST['name'];
$area = $_POST['area'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$bio = $_POST['bio'];
$image = $_FILES['image']['name'];
$target = SP_UPLOADPATH . $image;

if($_FILES['image']['name']) {
    if(!$_FILES['image']['error']) {
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['image']['error'];
    }
}

// connect to database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error connecting to MySQL Server");

$query = "INSERT INTO dunderMifflin VALUES (0, '$name', '$area', '$phoneNumber', '$email', '$bio', '$image')";

mysqli_query($dbc, $query) or trigger_error(mysqli_error($dbc)." ".$query);

mysqli_close($dbc);

ini_set('display_errors',1);
error_reporting(E_ALL);

header( "refresh:2;url=addRecords.php" );

include 'confirmation.view.php';