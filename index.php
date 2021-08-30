<?php 
    require('connection.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include "./includes/header.php" ?>

    </head>
    <body>
        <?php include "./includes/navbar.php" ?>

        <!-- Login Form start -->
        <?php include "./includes/loginForm.php" ?>
        <!-- Login Form end -->

        <!-- Popup Script -->
        <!-- <script src="popup_script.js"></script> -->

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>