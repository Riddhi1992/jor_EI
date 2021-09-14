<?php
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();
    // if(isset($_SESSION['visitCount'])) {
    //     $_SESSION['visitCount']++;
    // } 
    // else {
    //     $_SESSION['visitCount']=1;
    // }

    // echo "<p>The counter is: </p>" .$_SESSION['visitCount'];
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>
        <h3 class="text-center m-3">Frequently Asked Questions List</h3>
        <div class="d-flex justify-content-center">
            <button class='btn btn-primary m-3' data-bs-toggle="tooltip" data-bs-placement="bottom" title="Contact Admin"><a class='text-light text-decoration-none' href='contact_Admin.php'>Contact Admin <i class="far fa-paper-plane"></i> </a></button>&nbsp;
        </div>
        <!-- <p>Total Visitors: <span id='counts'></span></p> -->
    </body>
</html>

<?php

    $query = "SELECT * FROM `client_data`";

    $query_run = mysqli_query($con, $query);

    echo "
        <div class='container'>
            <div class='row'>
    ";

    if($query_run) {
        while($row = mysqli_fetch_array($query_run)) {
            $image = $row['image'];
            $status = $row['status'];
            $id = $row['id'];
            $visitor_counter = $row['visitor_counter'];
            $class = 'btn-primary';
            if ($status == 1) {
                $strstatus = "<a class='text-white text-decoration-none' href=activeProgram.php?userID=".$row['id']."&topic=".$row['topic'].">Active</a>";
                $class = 'btn-success';
            } else if ($status == 0) {
                $strstatus = "<a class='text-white text-decoration-none' href=nonActiveProgram.php?userID=".$row['id']."&topic=".$row['topic'].">Non-Active</a>";
                $class = 'btn-danger';
            }

            if($status == 0) {
                echo "
                    <div class='col gap-3 m-3'>
                        <div class='card h-100 shadow' style='width: 20rem;'>
                            <a href='' class='p-3'>
                                <img src='../videos/$image' class='card-img-top shadow' style='height: 200px;' alt='...'>
                            </a>    
                            <div class=card-body m-3'>
                                <a class='h4' href='view_data.php?id=$row[id]&topic=$row[topic]'>$row[topic]</a>&nbsp;
                                <p class='card-text'>$row[description]</p>
                                <p>Created By: <span class='text-primary'>$row[company_name]</span></p>
                                <p>Created on: <span class='text-primary'>$row[date_inserted]</span></p>
                                <button class='btn btn-primary'><a class='text-light text-decoration-none' href='view_data.php?id=$row[id]&topic=$row[topic]&visCon=$visitor_counter'>Edit</a></button>&nbsp;
                                <button class='btn btn-primary'><a class='text-light text-decoration-none' href='#'>Play</a></button>&nbsp;
                                <button class='btn $class'>$strstatus</button>&nbsp;
                                <p class='mt-2'>User visited # <span class='badge bg-primary'>$row[visitor_counter]</span></p>
                            </div>
                        </div>
                    </div>
                ";
            }
        }
    }

    echo "
            </div>
        </div>
    ";
    
?>

