<?php

require 'vendor/autoload.php';

//Load variables
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$state = $_POST['state'];

//email
$from = new SendGrid\Email($username, $email);
$subject = 'New sign up';
$to = new SendGrid\Email('Beto Carlos', 'me@betocarlos.com');
$content = new SendGrid\Content('text/html', "<html>
<body>
<h1>Hello There!</h1>
<p>Ther has been a new sign up:</p>
<p>Username: $username</p>
<p>Password: $password</p>
<p>Email: $email</p>
<p>State: $state</p>
</body>
</html>");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
// echo $response->statusCode();
// print_r($response->headers());
// echo $response->body();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="normalize.css">
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