<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>Dunder Mifflin Admin Section</title>
</head>

<body>

    <div class="container is-fluid">
        <!-- Nav Menu -->
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php">
                    <img src="images/dunderMifflin.jpg" alt="">
                </a>
            </div>
            <div class="navbar-menu is-active">
                <div class="navbar-end">
                    <a href="index.php" class="navbar-item">Home</a>
                    <a href="updateRecords.php" class="navbar-item is-active">Admin Section</a>
                </div>
            </div>
        </nav>

        <!-- Admin Section sub menu -->
        <div class="tabs is-right">
            <ul>
                <li>
                    <a href="addRecords.php">Add a Record</a>
                </li>
                <li class="is-active">
                    <a href="updateRecords.php">Update Records</a>
                </li
            </ul>
        </div>


        <!-- hero -->
        <section class="hero">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">DUNDER MIFFLIN DIRECTORY</h1>
                    <h2 class="subtitle">BEST PAPER COMPANY EVER!</h2>
                </div>
            </div>
        </section>