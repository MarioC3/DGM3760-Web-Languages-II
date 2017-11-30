<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>Soccer Players Database</title>
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
                    <a href="index.php" class="navbar-item is-active">Home</a>
                    <a href="addRecords.php" class="navbar-item">Add a Record</a>
                    <a href="updateRecords.php" class="navbar-item">Update a Record</a>
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

        <!-- Tiles -->
        <!-- tile ancestor -->
        <div class="tile is-ancestor is-vertical">
            <!-- tile parent -->
            <div class="tile is-parent">
                <!-- cards -->
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                        $name = $row['name'];
                        $twitterHandle = $row['twitterHandle'];
                        $twitterLink = $row['twitterLink'];
                        $bio = $row['bio'];
                        $image = $row['image'];
                        $target = SP_UPLOADPATH . $image;
                        echo "
                            <div class='tile is-child is-4'>
                                <div class='card'>
                                    <div class='card-image'>
                                        <figure class='image is-4by3' style='background:url($target) no-repeat center center; background-size: cover;'>
                                        </figure>
                                    </div>
                                    <div class='card-content'>
                                        <div class='media'>
                                            <div class='media-content'>
                                                <p class='title is-4 nameTitle'>$name</p>
                                                <a href='$twitterLink'><p class='subtitle is-6'>$twitterHandle</p></a>
                                            </div>
                                        </div>
                                        <div class='content'>
                                            $bio
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                    };
                ?>
                <!-- End of cards -->
            </div>
            <!-- tile parent ends -->
        </div>
        <!-- Tile ancestor ends -->
    </div>
</body>

</html>