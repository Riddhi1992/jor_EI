<?php
    include "../connection.php";
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $query = "SELECT * FROM `registered_users` WHERE `id`='$id'";

    $row = mysqli_fetch_assoc(mysqli_query($con,$query));

    $arr = array('status'=>$row['status']);
    echo json_encode($arr);
?>
