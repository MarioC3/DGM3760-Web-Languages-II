<?php

include 'adminHeaderApp.view.php'

?>
<!-- Begins form -->
<div class="containerForm">
<div class="box">
    <form enctype='multipart/form-data' method="post" action="updateDatabase.php">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input value='<?= $row['name'] ?>' name='name' class="input" type="text" placeholder="Joe Carlos" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Area of Expertise</label>
            <div class="control">
                <input name='area' value='<?= $row['area'] ?>' class="input" type="text" placeholder="Sales" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Phone Number</label>
            <div class="control">
                <input name='phoneNumber' value='<?= $row['phoneNumber'] ?>' class="input" type="text" placeholder="(812)-345-7123" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Email Address</label>
            <div class="control">
                <input name='email' value='<?= $row['email'] ?>' class="input" type="text" placeholder="joe@dundmif.com" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Short Bio</label>
            <div class="control">
                <textarea name='bio' class="textarea" placeholder="Bio of the player"><?= $row['bio'] ?></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">Upload a picture of the employee</label>
            <div class="control">
                <input type="file" name="image" id="image">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button name='submit' type='submit' class="button is-link">Submit</button>
            </div>
        </div>

        <input type="hidden" name="id" value="<?= $row['id'] ?>">

    </form>
</div>
</div>

<?php
include 'footerApp.view.php'
?>