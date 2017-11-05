<?php

// Connect Database
$dbc = mysqli_connect("internal-db.s221976.gridserver.com", "db221976", "Ma12221989!", "db221976_dgm3760") or die("Error connecting to MySQL Server");

// Query the variables
$query = "SELECT * FROM users";
$result = mysqli_query($dbc, $query) or die('Error querying Database');

//Delete from database
if (isset($_POST['submit'])) {
    foreach ($_POST['toDelete'] as $delete_row) {
        $query2 = "DELETE FROM users WHERE id = $delete_row";
        mysqli_query($dbc, $query2)
            or die('Error querying database while submitting the form');
        // echo $delete_row;
    }
    echo "<meta http-equiv='refresh' content='0'>";
}

mysqli_close($dbc);

include 'unsubscribe.view.php';