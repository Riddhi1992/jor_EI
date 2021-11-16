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

        <?php 
            $query = "SELECT * FROM `client_data` WHERE `id` = '85'";
            $query_run = mysqli_query($con, $query);

            echo "
                <div class='container'>
                    <div class='row m-5'>
            ";

            if($query_run) {
                while($row = mysqli_fetch_array($query_run)) {
                    // if($row_data['company_name'] == $row['company_name']) {
                        $image = $row['image'];
                        $status = $row['status'];
                        $id = $row['id'];
                        // if($status == 1) {
                            echo "
                                <div class='col gap-3 m-3'></div>
                                <div class='col gap-3 m-3'>
                                    <div class='card h-100 shadow' style='width: 20rem;'>
                                        <a href='#' class='p-3'>
                                            <img src='./owner/images/$image' class='card-img-top shadow' style='height: 200px;' alt='...'>
                                        </a>    
                                        <div class='card-body m-3'>
                                            <a class='h4' href='#'>$row[address]<br> $row[city], $row[state] - $row[zipcode]</a>&nbsp;
                                            <h5>$row[property_type]</h5>
                                            <p class='card-text'>$row[description]</p>
                                            <p>Created By: <span class='text-primary'>$row[company_name]</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col gap-3 m-3'></div>
                            ";
                        // }

                        
                    // }
                }
            }

            echo "
                    </div>
                </div>
            ";
        ?>
        <?php include "./includes/footer.php" ?>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>