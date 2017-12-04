<?php
include 'header.view.php';
?>

<div class="uk-align-center form">
        <form method="POST" action="login.php">
            <fieldset class="uk-fieldset"></fieldset>
            <legend class="uk-legend">Log In to media MAGIC.</legend>

                <!-- username -->
                <div class="uk-margin">
                    <div class="uk-form-label">Username</div>
                    <input required name="username" class="uk-input" type="text" value="<?php if (!empty($username)) echo $username; ?>">
                </div>

                <!-- password-->
                <div class="uk-margin">
                    <div class="uk-form-label">Password</div>
                    <input required name="password" class="uk-input" type="password">
                </div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-primary uk-align-right" type="submit" name="submit">Log In</button>
                </div>

                <?php 
                    echo $feedback;
                ?>

            </fieldset>

        </form>
    </div>

<?php
include ('footer.view.php')
?>