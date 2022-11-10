
<?php 
    include("dbcon.php");
?>
<?php
if (!$_SESSION['User_N']) {
    header("location: Form_login.php");
}
?>