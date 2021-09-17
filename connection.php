<?php 
    $con = mysqli_connect("localhost", "root", "", "registered_user");

    if(mysqli_connect_error()) {
        echo"<script>alert('Cannot connect to database');</script>";
        exit();
    }
?>