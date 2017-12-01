<?php

include 'headerApp.view.php'

?>
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
                    <input name='twitterLink' class="input" type="text" placeholder="https://twitter.com/Cristiano?lang=en" value="<?= $twitterLink; ?>"
                        required>
                </div>
            </div>

            <div class="field">
                <label class="label">Short Bio</label>
                <div class="control">
                    <textarea name='bio' class="textarea">
                        <?= $row['bio']; ?>
                    </textarea>
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

<?php
include 'footerApp.view.php'
?>