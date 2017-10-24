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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>03sendingSpam</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Hind:300,700" rel="stylesheet">
    <!-- build:css css/main.min.css -->
    <link rel="stylesheet" href="css/main.css">
    endbuild
</head>
<body>
    <div class="wrapper">
        <div class="d-flex justify-content-center">
            <h1>You're email has been sent!'</h1>
        </div>
        <div class="d-flex justify-content-center">
            <a class="btn" href="index.html" role="button">Take Me back!</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>
</html>