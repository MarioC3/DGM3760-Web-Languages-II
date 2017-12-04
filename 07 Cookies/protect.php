<?php
// check if user is logged in
if (!isset($_COOKIE['username'])) {

    // redirect to next page
    header( "refresh:2;url=login.php" );

    include 'views/header.view.php';
    echo "
    <div id='modal-close-default' uk-modal class='uk-open' style='display: block'>
        <div class='uk-modal-dialog uk-modal-body'>
            <button class='uk-modal-close-default' type='button' uk-close></button>
            <h2 class='uk-text-danger uk-modal-title'>Please login to see this page</h2>
            <p><a href='login.php'>Click here</a> if your'e not automatically re-directed.</p>
        </div>
        </div>
    ";
    include 'views/footer.view.php';

    
    exit();
}

?>