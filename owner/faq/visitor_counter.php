<?php 
    include "../../connection.php"; 
    session_start();
?>

<?php 

    if(isset($_GET['address']) && $_GET['id']) {
        $address = $_GET['address'];
        $id = $_GET['id'];

        $query = "SELECT * FROM `client_data` WHERE `address` = '$address'";
        $result = mysqli_query($con, $query);

        if(isset($_GET['visCon'])) {
            $visCon = $_GET['visCon'];
            $sql = "UPDATE `client_data` SET `visitor_counter` = $visCon+1 WHERE id = $id";
            $res = mysqli_query($con, $sql);
        }            
    }

?>