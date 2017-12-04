<!DOCTYPE html>
<html>

<head>
    <title>Magic Media</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>

    <div class="uk-container">

        <!-- nav bar -->
        <nav class="uk-navbar uk-navbar-container uk-margin uk-navbar-transparent uk-margin-top">
            <!-- login -->
            <div class="uk-navbar-left">

                <ul class="uk-navbar-nav">
                    <li class="">
                        <?php
                            if (isset($_COOKIE['username'])) {
                                echo "<a class='uk-text-primary href='#'>Hello ".$_COOKIE['firstName']."</a>";
                            } else {
                                echo "<a href='login.php'>Log In</a>";
                            };
                        ?>
                    </li>
                    <li>
                        <?php
                            if (isset($_COOKIE['username'])) {
                                echo "<a href='logout.php' class='uk-text-warning'>Sign out</a>";
                            } else {
                                echo "<a href='signUp.php'>Sign Up</a>";
                            };
                        ?>
                    </li>
                </ul>

            </div>

            <!-- Toggle -->
            <div class="uk-navbar-right">
                <div class="uk-offcanvas-content">

                    <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#" uk-toggle="target: #offcanvas-nav-primary"></a>

                    <div id="offcanvas-nav-primary" uk-offcanvas="flip: true;">
                        <div class="uk-offcanvas-bar uk-flex uk-flex-column">

                            <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                                <li class="uk-active">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="">
                                    <a href="page1.php">Page1</a>
                                </li>
                                <li class="">
                                    <a href="page2.php">Page2</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </nav>