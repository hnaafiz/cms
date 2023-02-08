<?php 
session_start(); 
session_destroy();
header("Location: http://class.test/login.php");
?>