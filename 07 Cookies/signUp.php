<?php

require('config.php');

$message = '';

// Database Connection
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error connecting to MySQL Server");

if (isset($_POST['submit'])){
    $firstName = mysqli_real_escape_string($dbc, trim($_POST['firstName']));
    $lastName = mysqli_real_escape_string($dbc, trim($_POST['lastName']));
    $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
    $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));                 
    if ((!empty($username)) && (!empty($password1)) && (!empty($password2)) && ($password1 == $password2)) {
        
        // Query and check if there's no more people with the same username
        $query = "SELECT * FROM mediaMagicUsers WHERE username = '$username'";
        $checkDuplicate = mysqli_query($dbc, $query) or die('Query Failed');

        if (mysqli_num_rows($checkDuplicate) == 0) {
            
            // Add user to the database
            $query = "INSERT INTO mediaMagicUsers VALUES(0, '$firstName', '$lastName', '$username', SHA('$password1'), NOW())";
            mysqli_query($dbc, $query) or trigger_error(mysqli_error($dbc)." ".$query);

            // cookie
            setcookie('username', $username, time() + (60*60*24*30)); // expires in 30 days
            setcookie('firstName', $firstName, time() + (60*60*24*30)); // expires in 30 days    
            setcookie('lastName', $lastName, time() + (60*60*24*30)); // expires in 30 days        
                        
            // redirect to next page
            header( "refresh:2;url=index.php" );

            // success message
            $message = "
                <div id='modal-close-default' uk-modal class='uk-open' style='display: block'>
                    <div class='uk-modal-dialog uk-modal-body'>
                        <button class='uk-modal-close-default' type='button' uk-close></button>
                        <h2 class='uk-text-success uk-modal-title'>Your account has been succesfully created!</h2>
                        <p><a href='index.php'>Click here</a> if your'e not automatically re-directed.</p>
                    </div>
                    </div>
                ";

            // close the connection
            mysqli_close($dbc);

        } else {
            echo "
                <p class='uk-text-danger'>An account already exists for this username. Please use a different username</p>
            ";
        };
    } else {
        echo 'Youre not making sense!';
    };
}

include 'views/signUp.view.php';