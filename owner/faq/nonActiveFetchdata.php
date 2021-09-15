<?php
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>
        <h3 class="text-center m-3">Archived Programs</h3>
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
                                <img src='../images/$image' class='card-img-top shadow' style='height: 200px;' alt='...'>
                            </a>    
                            <div class=card-body m-3'>
                                <a class='h4' href='view_data.php?id=$row[id]&topic=$row[topic]'>$row[topic]</a>&nbsp;
                                <p class='card-text'>$row[description]</p>
                                <p>Created By: <span class='text-primary'>$row[company_name]</span></p>
                                <p>Created on: <span class='text-primary'>$row[date_inserted]</span></p>
                                <button class='btn btn-primary'><a class='text-light text-decoration-none' href='view_data.php?id=$row[id]&topic=$row[topic]&visCon=$visitor_counter'>Edit <i class='far fa-edit'></i></a></button>&nbsp;
                                <button class='btn btn-primary'><a class='text-light text-decoration-none' href='#'>Play <i class='far fa-play-circle'></i> </a></button>&nbsp;
                                <button class='btn $class'>$strstatus</button>
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
                                        <a class='btn btn-danger' href='topic_delete.php?id=$row[id]&topic=$row[topic]'>Delete</i></a> 
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

