<?php 
    $con = mysqli_connect("localhost", "root", "", "registered_user");

    // if (!$con) {
    //     die("Failed to connect to " . mysqli_error(mysqli));
    // }

    if(mysqli_connect_error()) {
        echo"<script>alert('Cannot connect to database');</script>";
        exit();
    }
    // else {
    //     echo"<script>alert('Connection done');</script>";
    // }
?>