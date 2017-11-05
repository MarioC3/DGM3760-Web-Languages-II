<?php

//Load variables
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

//connect to database
$dbc = mysqli_connect("internal-db.s221976.gridserver.com", "db221976", "Ma12221989!", "db221976_dgm3760") or die("Error connecting to MySQL Server");

$query = ("INSERT INTO users (firstName, lastName, email) VALUES ( '$firstName', '$lastName', '$email')");

mysqli_query($dbc, $query) or die('Error querying Database');

mysqli_close($dbc);

include 'toDB.view.php';