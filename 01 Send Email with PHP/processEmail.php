<?php
//Load variables
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$state = $_POST['state'];

//email
$to = 'me@betocarlos.com';
$subject = 'New sign up';
$message = "Hello There.\n" .
"There has been a new sign up:\n" .
"Username: $username\n" .
"Password: $password\n" . 
"Email: $email\n" . 
"State: $state\n";
mail($to, $subject, $message, 'From:' . $email);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">\
    <link rel="stylesheet" href="normalize-min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,900" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <h1>Thanks for signing up</h1>
            <p class="confirmation">You'll receive a confirmation email shortly</p>
        </div>
    </div>
</body>

</html>