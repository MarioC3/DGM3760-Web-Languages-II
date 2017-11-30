<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>Add Record</title>
</head>

<body>

    <div class="container is-fluid">
        <!-- Nav Menu -->
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php">
                    <span>Soccer Database</span>
                </a>
            </div>
            <div class="navbar-menu is-active">
                <div class="navbar-end">
                    <a href="index.php" class="navbar-item">Home</a>
                    <a href="addRecords.php" class="navbar-item">Add a Record</a>
                    <a href="updateRecords.php" class="navbar-item is-active">Update a Record</a>
                </div>
            </div>
        </nav>

        <!-- hero -->
        <section class="hero">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">Soccer Database</h1>
                    <h2 class="subtitle">Best players in the world</h2>
                </div>
            </div>
        </section>

        <!-- All records -->
        <section class="section">
            <div class="container">
            <h1 class="title">All records</h1>
            <?php
                $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error connecting to MySQL Server");

                $query = "SELECT * FROM soccerPlayers";
                $result = mysqli_query($dbc, $query) or die('Error querying Database');

                while ($row = mysqli_fetch_array($result)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $twitterHandle = $row['twitterHandle'];
                    $twitterLink = $row['twitterLink'];
                    $bio = $row['bio'];
                    $image = $row['image'];
                    $target = SP_UPLOADPATH . $image;
                    echo'<div class="columns">';
                        echo '
                        <div class="column">
                            <h3>' . $name . '</h3>
                        </div>';
                        echo'
                        <div class="column">
                            <a class="remove" href="recordUpdate.php?id='.$id.'&amp;name='.$name.'&amp;twitterHandle='.$twitterHandle.'&amp;twitterLink='.$twitterLink.'&amp;bio='.$bio.'&amp;image='.$image.'">Update Record</a>
                        </div>
                        ';
                        echo '
                        <div class="column">
                            <a class="remove" href="deleteRecords.php?id='.$id.'&amp;name='.$name.'&amp;twitterHandle='.$twitterHandle.'&amp;twitterLink='.$twitterLink.'&amp;bio='.$bio.'&amp;image='.$image.'">Remove Record</a>
                        </div>
                        ';
                    echo '</div>';
                }
                mysqli_close($dbc);
            ?>
            </div>
        </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>