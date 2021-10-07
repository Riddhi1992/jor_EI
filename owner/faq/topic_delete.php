<?php 
    include "../../connection.php"; 
    session_start();
?>

<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM `client_data` WHERE `id`=$id";
        $result = $con->query($query);

        if($result) {
            $query = "UPDATE `client_data` SET `is_deleted`='1' WHERE `id`='$id'";
            $result = $con->query($query);

            if ($result) {
                echo"
                    <script>
                        alert('Topic is deleted Successfully!');
                        window.location.href = 'nonActiveFetchdata.php';
                    </script>
                ";
            }
        }
    }
?>