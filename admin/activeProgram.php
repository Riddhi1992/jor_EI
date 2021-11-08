<?php
    include "../connection.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>
        
    </body>
</html>


<?php 
    $user_id = $_GET['userID'];
    $topic = $_GET['topic'];
    $query = "UPDATE `client_data` SET `status`='1' WHERE `id`='$user_id'";
    $result = $con->query($query);

    if($result == TRUE) {
        echo "
            <script>
                alert('This program is now Activating!');
                window.location.href = 'activeFetchdata.php';
            </script>
        ";
    }
    else {
        echo "Error";
    }
?>
    </body>
</html>