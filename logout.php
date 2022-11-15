<?php 
    unset($_SESSION['user_login']);
    unset($_SESSION['admin_login']);
    header('location: register.php');
?>