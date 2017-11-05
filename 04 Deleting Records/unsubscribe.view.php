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
    <!-- build:css css/main.css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- endbuild -->
</head>

<body>
    <div class="container-fluid">
        <ul class="nav nav-pills justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Sign up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="spam.html">Spam!</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="unsubscribe.php">Unsubscribe</a>
            </li>
        </ul>
    </div>
    <footer class="footer">
        <p class="text-right">Made by Beto Carlos - DGM-3760</p>
    </footer>

    <div class="container d-flex align-items-center d-flex justify-content-center">
        <div class="row d-flex align-items-center">
            <div class="col-12 content">
                <h1>Select the emails you want to unsubscribe</h1>
                <div class="form-check">
                    <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">

                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            $firstName = $row['firstName'];
                            $lastName = $row['lastName'];
                            $email = $row['email'];
                            $id = $row['id'];
                            echo "
                                <label class='form-check-label custom-label'>
                                    <input class='form-check-input' type='checkbox' value='$id' name='toDelete[]'>&nbsp; $firstName $lastName: $email
                                </label><br>
                            ";
                        };
                        ?>

                        <input class="btn button btn-lg" type='submit' name='submit' value="Remove">
                    </form>
                </div>
            </div>
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