<?php

// when user presses logout button come to this page!
// we start off by destroying the session
// start our session
Session_start();
// destroy session
Session_destroy();
// then we rediect to the file 'goodbye.php' to say goodbye to the user!
header("Location: goodbye.php");

?>

