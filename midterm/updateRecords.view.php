<?php

include 'adminHeaderApp.view.php'

?>      <!-- All records -->
<section class="section">
    <div class="container">
        <h1 class="title">All records</h1>
        <?php
                $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error connecting to MySQL Server");

                $query = "SELECT * FROM dunderMifflin";
                $result = mysqli_query($dbc, $query) or die('Error querying Database');

                while ($row = mysqli_fetch_array($result)){
                    $id = $row['id'];
                    $name = $row['name'];
                    echo'<div class="columns">';
                        echo '
                        <div class="column">
                            <h3>' . $name . '</h3>
                        </div>';
                        echo '
                        <div class="column">
                            <a class="remove" href="recordUpdate.php?id='.$id.'">Update Record</a>
                        </div>
                        ';
                        echo '
                        <div class="column">
                            <a class="remove" href="deleteRecords.php?id='.$id.'&amp;name='.$name.'">Remove Record</a>
                        </div>
                        ';
                    echo '</div>';
                }
                mysqli_close($dbc);
            ?>
    </div>
</section>
<?php
include 'footerApp.view.php'
?>