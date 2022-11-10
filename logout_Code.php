<?php
session_start();
if(isset($_POST['Log_Out'])){
    session_destroy();
    unset($_SESSION['User_N']);
    header('location: Form_login.php');
}
?>