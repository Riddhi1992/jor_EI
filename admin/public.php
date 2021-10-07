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
    $id = $_GET['id'];
    $query = "UPDATE `client_data` SET `public_private`='Public' WHERE `id`='$id'";
    $result = $con->query($query);

    if($result == TRUE) {
        echo "
            <script>
                alert('Status changed to Public!');
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