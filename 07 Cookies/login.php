<?php

require('config.php');

$feedback = "<p>First time here? <a href='signup.php'>Create an Account</a></p>";

if (isset($_POST['submit'])) {
    // Database Connection
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error connecting to MySQL Server");

    // assigning variables
    $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $password = mysqli_real_escape_string($dbc, trim($_POST['password']));

    // Query
    $query = "SELECT * FROM mediaMagicUsers where username = '$username' AND password = SHA('$password')";
    $data = mysqli_query($dbc, $query) or trigger_error(mysqli_error($dbc)." ".$query);

    if (mysqli_num_rows($data) == 1) {
        $row = mysqli_fetch_array($data);
        // cookie
        setcookie('username', $row['username'], time() + (60*60*24*30)); // expires in 30 days
        setcookie('firstName', $row['firstName'], time() + (60*60*24*30)); // expires in 30 days    
        setcookie('lastName', $row['lastName'], time() + (60*60*24*30)); // expires in 30 days 
        header('Location: index.php');
    } else {
        $feedback = "<p class='uk-text-danger'>Could not find an account for <span class='uk-text-bold'>".$_POST['username']."</span> Would you like to <a href='signup.php'=>Create a new Account?</a></p>";
    };

}


include 'views/login.view.php';