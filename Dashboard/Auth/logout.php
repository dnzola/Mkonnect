<?php
//stores all inforamation of pages in variables 

session_start();

//end session
session_destroy();

//destroy cookie

setcookie("email", "", time()+(60*60*1));
setcookie("password","", time()+(60*60*1));

//redirects them to login page 

header("Location: login.php"); 

?>

