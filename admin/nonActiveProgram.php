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
    $query = "UPDATE `client_data` SET `status`='0' WHERE `id`='$user_id'";
    $result = $con->query($query);

    if($result == TRUE) {
        echo "
            <script>
                alert('This program is now Deactivating!');
                window.location.href = 'nonActiveFetchdata.php';
            </script>
        ";
    }
    else {
        echo "Error";
    }
?>
    <?php include "./includes/footer.php" ?>
    </body>
</html>