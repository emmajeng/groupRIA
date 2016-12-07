<?php
// start our session
session_start();
// if there is username session proceed
if(isset($_SESSION['username'])){
  
   //do nothing here
  
}else{
  // else if no session redirect to login
  header("Location: form.php");
  exit();
}
// security feature
//we use this for every page just say require check.php at every page top
