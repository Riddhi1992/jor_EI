<?php 
    include "../../connection.php"; 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>
        
    <?php include "./includes/footer.php" ?>
    </body>
</html>


<?php 
    $user_id = $_GET['userID'];
    $property_type = $_GET['property_type'];
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
    </body>
</html>