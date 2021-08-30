<?php 
    include "../connection.php";
    session_start();

    $uid = $_SESSION['UID'];

    $time = time() + 10;

    $query = "UPDATE registered_users SET last_login=$time WHERE id=$uid";
    $result = $con->query($query);

?>

