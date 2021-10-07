<?php 
    require('connection.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include "./includes/header.php" ?>

    </head>
    <body>
        <?php include "./includes/navbar.php" ?>

        <!-- Login Form start -->
        <?php include "./includes/loginForm.php" ?>
        <!-- Login Form end -->
        <h3 class="text-center m-5">Public Programs</h3>

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
                    $id = $row['id'];
                    $public_private = $row['public_private'];
                    $visitor_counter = $row['visitor_counter'];
                    $class = 'btn-primary';
                    if ($status == 1) {
                        $strstatus = "<span>Active</span>";
                        $class = 'btn-success';
                    } else if ($status == 0) {
                        $strstatus = "<span>Non-Active</span>";
                        $class = 'btn-danger';
                    }

                    if ($public_private == 'Private') {
                        $pri_pub = "<span class='text-white text-decoration-none' data-toggle='tooltip' title='Private' data-placement='bottom'><i class='fas fa-lock'></i></span>";
                    } else if ($public_private == 'Public') {
                        $pri_pub = "<span class='text-white text-decoration-none' data-toggle='tooltip' title='Public' data-placement='bottom'><i class='fas fa-lock-open'></i></span>";
                    }
        
                    if($status == 1 && $public_private == 'Public') {
                        echo "
                            <div class='col gap-3 m-3'>
                                <div class='card h-100 shadow' style='width: 20rem;'>
                                    <a href='' class='p-3'>
                                        <img src='./owner/images/$image' class='card-img-top shadow' style='height: 200px;' alt='...'>
                                    </a>    
                                    <div class=card-body m-3'>
                                        <a class='h4' href='view_data.php?id=$row[id]&topic=$row[topic]'>$row[topic]</a>&nbsp;
                                        <button class='btn btn-secondary float-end'>$pri_pub</button>&nbsp;
                                        <p class='card-text'>$row[description]</p>
                                        <p>Created By: <span class='text-primary'>$row[company_name]</span></p>
                                        <p>Created on: <span class='text-primary'>$row[date_inserted]</span></p>
                                        <button class='btn btn-primary'><a class='text-light text-decoration-none' href='./user/view_data.php?id=$row[id]&topic=$row[topic]&visCon=$visitor_counter'>Play <i class='far fa-play-circle'></i></a></button>&nbsp;
                                        <button class='btn $class disable'>$strstatus</button>&nbsp;
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

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>