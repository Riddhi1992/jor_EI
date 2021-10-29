<?php 
    include "../../connection.php"; 
    session_start();
?>

<?php
    if(isset($_GET['id']) && $_GET['address']) {
        $id = $_GET['id'];
        $address = $_GET['address'];

        $query = "SELECT * FROM `client_data` WHERE `id`='$id'";
        $result = $con->query($query);
        $row = mysqli_fetch_array($result);
        $visCon = $row['visitor_counter'];
        $option = $row['buy_lease'];

        if ($row['id'] == $id && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `intro_video`= NULL WHERE `id`='$id' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
    }
?>