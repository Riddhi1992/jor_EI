<?php 
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>


    <body>
        <?php include "./includes/navbar.php" ?>

        <h3 class="text-center m-3">Programs</h3>
    </body>
</html>

<?php 
    // include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    // session_start();
    // $result = $con->query($query);

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
                $strstatus = "<span>Active</span>";
                $class = 'btn-success';
            } else if ($status == 0) {
                $strstatus = "<span>Non-Active</span>";
                $class = 'btn-danger';
            }

            if($status == 1) {
                echo "
                    <div class='col gap-3 m-3'>
                        <div class='card h-100 shadow' style='width: 20rem;'>
                            <a href='' class='p-3'>
                                <img src='../owner/images/$image' class='card-img-top shadow' style='height: 200px;' alt='...'>
                            </a>    
                            <div class=card-body m-3'>
                                <a class='h4' href='view_data.php?id=$row[id]&topic=$row[topic]'>$row[topic]</a>&nbsp;
                                <p class='card-text'>$row[description]</p>
                                <p>Created By: <span class='text-primary'>$row[company_name]</span></p>
                                <p>Created on: <span class='text-primary'>$row[date_inserted]</span></p>
                                <button class='btn btn-primary'><a class='text-light text-decoration-none' href='view_data.php?id=$row[id]&topic=$row[topic]&visCon=$visitor_counter'>Play <i class='far fa-play-circle'></i></a></button>&nbsp;
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

<?php 
    if(isset($_POST['play'])) {

    }
?>

