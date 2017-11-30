<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>Update Record</title>
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
                    <a href="addRecords.php" class="navbar-item is-active">Add a Record</a>
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

        <!-- Begins form -->
        <div class="containerForm">
            <div class="box">
                <form enctype='multipart/form-data' method="post" action="updateDatabase.php">
                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input value="<?= $name; ?>" name='name' class="input" type="text" placeholder="Ronaldo" required>
                        </div>
                    </div>

                    <div class="field">
                            <label class="label">Twitter Handle</label>
                            <div class="control">
                                <input name='twitterHandle' class="input" type="text" placeholder="@Cristiano" value="<?= $twitterHandle; ?>" required>
                            </div>
                    </div>

                    <div class="field">
                            <label class="label">Twitter link</label>
                            <div class="control">
                                <input name='twitterLink' class="input" type="text" placeholder="https://twitter.com/Cristiano?lang=en" value="<?= $twitterLink; ?>" required>
                            </div>
                    </div>

                    <div class="field">
                        <label class="label">Short Bio</label>
                        <div class="control">
                            <textarea name='bio' class="textarea" ><?= $row['bio']; ?></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Upload a picture of the player</label>
                        <div class="control">
                            <input type="file" name="image" id="image">
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button type='submit' name='submit' class="button is-link">Update Record</button>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $id; ?>">
                </form>
            </div>
        </div>
    </div>
</body>

</html>