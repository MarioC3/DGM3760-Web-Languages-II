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
    <form enctype='multipart/form-data' method="POST" action="confirmation2.php">
        <div class="field">    
            <label class="label">Are you sure you want to delete this record?</label>
            <p><?php echo $name; ?></p>
            <div class="control">
                <input type="hidden" name="image" value="images/<?php echo $row['image']; ?>" />
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <button type='submit' name='submit' class="button is-link">Yes, Delete it!</button>
            </div>
        </div>
    </form>

    </div>
</body>

</html>