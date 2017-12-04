<?php
include 'header.view.php';
?>

    <div class="uk-align-center form">
        <form method="POST" action="">
            <fieldset class="uk-fieldset"></fieldset>
            <legend class="uk-legend">Sign up to media MAGIC.</legend>

                <!-- name -->
                <div class="uk-margin">
                    <div class="uk-form-label">First Name</div>
                    <input placeholder="Barack" required name="firstName" class="uk-input" type="text" value="<?php if (!empty($firstName)) echo $firstName; ?>">
                </div>

                <!-- last name -->
                <div class="uk-margin">
                    <div class="uk-form-label">Last Name</div>
                    <input placeholder="Obama" required name="lastName" class="uk-input" type="text"  value="<?php if (!empty($lastName)) echo $lastName; ?>">
                </div>

                <!-- user name -->
                <div class="uk-margin">
                    <div class="uk-form-label">Username</div>
                    <input placeholder="Barobama22" required name="username" class="uk-input" type="text" value="<?php if (!empty($username)) echo $username; ?>">
                </div>

                <!-- password -->
                <div class="uk-margin">
                    <div class="uk-form-label">Password</div>
                    <input required name="password1" class="uk-input" type="password">
                </div>
                
                <!-- password -->
                <div class="uk-margin">
                    <div class="uk-form-label">Re-type Password</div>
                    <input required name="password2" class="uk-input" type="password">
                </div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-primary uk-align-right" type="submit" name="submit">Create Account!</button>
                </div>

                <?php
                    echo $message;
                ?>

            </fieldset>

        </form>
    </div>


<?php
include ('footer.view.php')
?>