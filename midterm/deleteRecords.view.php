<?php

include 'adminHeaderApp.view.php'

?>
<!-- hero -->
<form enctype='multipart/form-data' method="POST" action="confirmation2.php">
    <div class="field">
        <label class="label">Are you sure you want to delete this record?</label>
        <p>
            <?php echo $name; ?>
        </p>
        <div class="control">
            <input type="hidden" name="image" value="images/<?php echo $row['image']; ?>" />
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <button type='submit' name='submit' class="button is-link">Yes, Delete it!</button>
        </div>
    </div>
</form>

<?php
include 'footerApp.view.php'
?>