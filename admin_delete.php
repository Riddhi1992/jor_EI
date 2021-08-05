<?php
    include "connection.php";

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $query = "DELETE FROM `registered_users` WHERE `id`='$user_id'";

        $result = $con->query($query);

        if($result == TRUE) {
            echo"
                <script>
                    alert('Deleted Successfully!');
                    window.location.href = 'admin_view.php';
                </script>
            ";
        } else {
            echo "Error";
        }
    }
?>
