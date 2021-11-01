<?php 
    include "../../connection.php"; 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>
        <h3 class="text-center m-3">Active Programs</h3>
        <div class="d-flex justify-content-center">
            <button class='btn btn-primary m-3' data-bs-toggle="tooltip" data-bs-placement="bottom" title="Contact Admin"><a class='text-light text-decoration-none' href='contact_Admin.php'>Contact Admin <i class="far fa-paper-plane"></i> </a></button>&nbsp;
        </div>

        <!-- <div class="count text-center">00</div>

        <?php // include "./includes/cookies.js.php"?> -->
        
    </body>
</html>

<?php         

    $sql = "SELECT `id`, `company_name`, `user_name` FROM `registered_users` WHERE `user_name`='$_SESSION[username]' ";
    $res = mysqli_query($con, $sql);
    $row_data = mysqli_fetch_array($res);

    $query = "SELECT * FROM `client_data`";

    $query_run = mysqli_query($con, $query);

    echo "
        <div class='container'>
            <div class='row'>
    ";

    if($query_run) {
        while($row = mysqli_fetch_array($query_run)) {
            if($row_data['company_name'] == $row['company_name']) {
                $image = $row['image'];
                $status = $row['status'];
                // $public_private = $row['public_private'];
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
                // if ($public_private == 'Private') {
                //     $pri_pub = "<a class='text-white text-decoration-none' data-toggle='tooltip' title='Make it Public' data-placement='bottom' href=public.php?id=".$row['id']."><i class='fas fa-lock'></i></a>";

                // } else if ($public_private == 'Public') {
                //     $pri_pub = "<a class='text-white text-decoration-none' data-toggle='tooltip' title='Make it Private' data-placement='bottom' href=private.php?id=".$row['id']."><i class='fas fa-lock-open'></i></a>";
                // }

                if($status == 1) {
                    echo "
                        <div class='col gap-3 m-3'>
                            <div class='card h-100 shadow' style='width: 20rem;'>
                                <a href='view_data.php?id=$row[id]&address=$row[address]&visCon=$visitor_counter&option=$row[buy_lease]' class='p-3'>
                                    <img src='../images/$image' class='card-img-top shadow' style='height: 200px;' alt='...'>
                                </a>    
                                <div class=card-body m-3'>
                                    <a class='h4' href='view_data.php?id=$row[id]&address=$row[address]&visCon=$visitor_counter&option=$row[buy_lease]'>$row[address]</a>&nbsp;
                                    <h5>$row[property_type]</h5>
                                    <p class='card-text'>$row[description]</p>
                                    <p>Created By: <span class='text-primary'>$row[company_name]</span></p>
                                    <p>Created on: <span class='text-primary'>$row[date_inserted]</span></p>
                                    <button class='btn btn-primary'><a class='text-light text-decoration-none' href='view_data.php?id=$row[id]&address=$row[address]&visCon=$visitor_counter&option=$row[buy_lease]'>Edit <i class='far fa-edit'></i></a></button>&nbsp;
                                    <button class='btn btn-primary'><a class='text-light text-decoration-none' href='#'>Play <i class='far fa-play-circle'></i> </a></button>&nbsp;
                                    <button class='btn btn-primary'><a class='text-light text-decoration-none' href='visitor_counter.php?id=$row[id]&address=$row[address]&visCon=$visitor_counter'>Play <i class='far fa-play-circle'></i> </a></button>&nbsp;
                                    <button class='btn $class'>$strstatus</button>&nbsp;
                                    <button name='publish' class='btn btn-secondary mt-2'><a class='text-light text-decoration-none' href='publish.php?id=$row[id]&address=$row[address]'>Publish</a></button>&nbsp;
                                    <p class='mt-2'>User visited # <span class='badge bg-primary'>$row[visitor_counter]</span></p>
                                </div>
                            </div>
                        </div>
                    ";
                }

                
            }
        }
    }

    echo "
            </div>
        </div>
    ";
    

?>

<?php include "./includes/footer.php" ?>

