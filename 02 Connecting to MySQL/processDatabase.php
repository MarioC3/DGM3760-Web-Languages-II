<?php

//Load variables
$user = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$state = $_POST['state'];

//send to database
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url['host'];
$username = $url['user'];
$password = $url['pass'];
$db = substr($url['path'], 1);

$conn = new mysqli($server, $username, $password, $db)
   or die('Error connecting to Database');

$conn->query("INSERT INTO users (username, pass, email, state) VALUES ( '$user', '$pass', '$email', '$state')") or die('Error querying Database');

mysqli_close($on);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Success!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,900" rel="stylesheet">
</head>

<body>
    <div class="container">
       <div class="wrapper">
           <h1>Thanks for signing up</h1>
       </div>
   </div>
</body>
</html>
