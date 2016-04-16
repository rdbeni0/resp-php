<?php 
    require("konfig.php"); 
    unset($_SESSION['uzer']);
    header("Location: index.php"); 
    die("Redirecting to: index.php");
?>
