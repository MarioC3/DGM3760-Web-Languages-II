<?php

//Delete Cookies setting the expiration to an hour ago
setcookie('username', '', time()-3600);
setcookie('firstName', '', time()-3600);
setcookie('lastName', '', time()-3600);

header('Location: index.php');