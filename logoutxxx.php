<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
header("Pragma: no-cache");

session_start();

session_unset($_COOKIE['mypassword']);

session_destroy();

header ("Location: http://prizmicbrill.com/index2.htm");
?>