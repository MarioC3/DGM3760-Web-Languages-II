<?php

include 'headerApp.view.php'

?>
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
<?php

include 'footerApp.view.php'

?>