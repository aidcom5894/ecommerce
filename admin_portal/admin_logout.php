<?php 

session_start();
unset($_SESSION['loggedinAdmin']);
session_unset();
session_destroy();
header('Location:admin_login.php');

?>