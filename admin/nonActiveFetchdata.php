<?php
    include "../connection.php";
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
        <h3 class="text-center m-3">Archived Programs</h3>
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
            $public_private = $row['public_private'];
            $isDeleted = $row['is_deleted'];
            $id = $row['id'];
            $visitor_counter = $row['visitor_counter'];
            $class = 'btn-primary';
            if ($status == 1) {
                $strstatus = "<a class='text-white text-decoration-none' href=nonActiveProgram.php?userID=".$row['id']."&property_type=".$row['property_type'].">Deactivate</a>";
                $class = 'btn-danger';
            } else if ($status == 0) {
                $strstatus = "<a class='text-white text-decoration-none' href=activeProgram.php?userID=".$row['id']."&property_type=".$row['property_type'].">Activate</a>";
                $class = 'btn-success';
            }

            $name = "SELECT * FROM `registered_users` WHERE `company_name` = '$row[company_name]'";
            $name_res = mysqli_query($con, $name);
            $name_row = mysqli_fetch_array($name_res);

            $firstname = $name_row['first_name'];
            $lastname = $name_row['last_name'];

            // if ($public_private == 'Private') {
            //     $pri_pub = "<a class='text-white text-decoration-none' data-toggle='tooltip' title='Make it Public' data-placement='bottom' href=public.php?id=".$row['id']."><i class='fas fa-lock'></i></a>";
            // } else if ($public_private == 'Public') {
            //     $pri_pub = "<a class='text-white text-decoration-none' data-toggle='tooltip' title='Make it Private' data-placement='bottom' href=private.php?id=".$row['id']."><i class='fas fa-lock-open'></i></a>";
            // }

            if($status == 0 && $isDeleted == 0) {
                echo "
                    <div class='col gap-3 m-3'>
                        <div class='card h-100 shadow' id='cardWidth'>
                            <a href='' class='p-3'>
                                <img src='../owner/images/$image' class='card-img-top shadow' style='height: 200px;' alt='...'>
                            </a>    
                            <div class=card-body m-3'>
                                <a class='h4' href='view_data.php?id=$row[id]&address=$row[address]&visCon=$visitor_counter&option=$row[buy_lease]'>$row[address]</a>&nbsp;
                                <h5>$row[property_type]</h5>
                                <p class='card-text'>$row[description]</p>
                                <p>Created By: <span class='text-primary'>$firstname $lastname - $row[company_name]</span></p>
                                <p>Created on: <span class='text-primary'>$row[date_inserted]</span></p>
                                <button class='btn btn-primary mt-2'><a class='text-light text-decoration-none' href='view_data.php?id=$row[id]&address=$row[address]&visCon=$visitor_counter&option=$row[buy_lease]'>Edit <i class='far fa-edit'></i></a></button>&nbsp;
                                <button class='btn btn-primary mt-2'><a class='text-light text-decoration-none' href='#'>Play <i class='far fa-play-circle'></i> </a></button>&nbsp;
                                <button class='btn $class mt-2'>$strstatus</button>
                                <a class='btn btn-danger mb-1 mt-2' data-bs-toggle='modal' href='#modal' role='button'>Delete <i class='far fa-trash-alt'></i></a>
                                <p class='mt-2'>User visited # <span class='badge bg-primary'>$row[visitor_counter]</span></p>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class='modal fade' id='modal' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                        <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                        <a class='btn btn-danger' href='topic_delete.php?id=$row[id]&address=$row[address]'>Delete</i></a> 
                                    </div>
                                </div>
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

<?php include "./includes/footer.php" ?>

