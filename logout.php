<?php
    session_start();
    session_unset();
    unset($_SESSION['UID']);
    session_destroy();
    header("location: index.php");
    die();
?>
