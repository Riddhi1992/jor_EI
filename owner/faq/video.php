<?php 
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();
    // $result = $con->query($query);
    $sql = "SELECT * FROM `owner_datas`";
    $res = mysqli_query($con, $sql);

    echo "MyVIDEOS";

    while ($row = mysqli_fetch_assoc($res)) {
        $id = $row['id'];
        $video = $row['video'];

        echo "
            <h4><a href='watch.php?id=$id'>".$video."</a></h4>
        ";
    }
?>