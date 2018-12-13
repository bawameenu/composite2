<?php
// remove all session variables
session_start();
session_destroy(); 
header("location: index.php"); 
?>