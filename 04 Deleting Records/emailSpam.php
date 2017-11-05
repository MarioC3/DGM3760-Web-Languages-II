<?php

// Declare Variables
$from = 'me@macarlos.com';
$subject = $_POST['subject'];
$body = $_POST['body'];

// Connect Database
$dbc = mysqli_connect("internal-db.s221976.gridserver.com", "db221976", "Ma12221989!", "db221976_dgm3760") or die("Error connecting to MySQL Server");

// Query the variables
$query = "SELECT * FROM users";
$result = mysqli_query($dbc, $query) or die('Error querying Database');

while ($row = mysqli_fetch_array($result)) {
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $to = $row['email'];
    mail($to, $subject, $body);
};

include 'emailSpam.view.php';