<?php

require_once('appvars.php');
require_once('connectvars.php');

$id = $_POST['id'];
$name = $_POST['name'];
$area = $_POST['area'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$bio = $_POST['bio'];
// $image = $_FILES['image']['name'];
// $target = SP_UPLOADPATH . $image;


if (isset($_POST['submit'])) {
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error connecting to MySQL Server");
    $query = "UPDATE dunderMifflin SET name='$name', area='$area', phoneNumber='$phoneNumber', email='$email', bio='$bio' WHERE id=$id";
    $result = mysqli_query($dbc, $query) or trigger_error(mysqli_error($dbc)." ".$query);;
    @unlink($_POST['image']);
}

header( "refresh:2;url=updateRecords.php" );

include 'updateDatabase.view.php';