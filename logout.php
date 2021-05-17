<?php
session_start();

if(isset($_POST['user_logout_btn']))
{
    session_destroy();
    unset($_SESSION['cusername']);
    header('Location: login.php');
}

?>