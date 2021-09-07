<?php 
    // include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php"; 
    $con = mysqli_connect('localhost', 'root', '', 'registered_user');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // if(mysqli_connect_error()) {
    //     echo"<script>alert('Cannot connect to database');</script>";
    //     exit();
    // }
    else {
        // $sql = "INSERT INTO `owner_datas`(`question`, `video`) VALUES ('What is your name','Testing')";
        // $sql = "INSERT INTO `owner_datas`(`question`, `video`) VALUES ('[What is your name]','[Testing]')";
        // $res = mysqli_query($con, $sql);
        // echo"<script>alert('Connection done');</script>";
        
    }

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <?php include "./includes/header.php" ?>
</head>
<body>
    <?php include "./includes/navbar.php" ?>
    <div class="mt-5"></div>
    <div class="container border rounded shadow">
        <h3 class="text-center m-3">FAQ form</h3>
        <form method="POST" class="m-5" action="" enctype="multipart/form-data">
            <div id="" class="">
                <div class='form-floating mb-3 visually-hidden'>
                    <input type='text' class='form-control' id='input' placeholder='Company Name' name='id'>
                    <label for='input'>ID</label>
                </div>
                <div class='form-floating mb-3'>
                    <input type='text' class='form-control' id='floatingInput0' placeholder='Question' name='question' required>
                    <label for='floatingInput0'>Question</label>
                </div>
                <div class='mb-3'>
                    <label for='formFile' class='form-label'>Upload your Video here</label>
                    <input class='form-control' type='file' id='formFile' name='file'>
                </div>
                <div class='row mb-3 mt-5'>
                    <div class='col'>
                        <button type='submit' class='btn btn-primary w-100' name='update' value='SAVE'>Update</button>
                    </div>
                    <div class='col'>
                        <button type='submit' class='btn btn-primary w-100' name='save' value='SAVE'>Save & Add Next</button>
                    </div>
                    <div class="col">
                        <button type='submit' class='btn btn-danger w-100' name='save_finish' value='Save & Finish'><a class='text-light text-decoration-none' href='fetchdata.php'>Save & Finish</a></button>
                    </div>
                </div>
            </div>                            
        </form>
    </div>
    <!-- <script type="text/javascript" src="./includes/nextPrev.js"></script> -->
</body>
</html>


<?php 
    if(isset($_POST['save'])) {
        $query = "SELECT * FROM `client_data` WHERE `ques17` IS NULL AND `ans17` IS NULL";
        $result = mysqli_query($con, $query);

        if($result) {
            $name = $_FILES['file']['name'];
            $tmp = $_FILES['file']['tmp_name'];
            move_uploaded_file($tmp, '../videos/'.$name);

            $sql = "UPDATE `client_data` SET `ques17`='$_POST[question]',`ans17`='$name' WHERE `ques17` IS NULL ORDER BY id DESC LIMIT 1";
            $res = mysqli_query($con, $sql);
        
            if($res) {
                echo"
                    <script>
                        alert('Seventeen Question updated successfully!');
                        window.location.href = 'faq18.php';
                    </script>
                ";
            }
        }    
    }

    if(isset($_POST['update'])) {
        if(isset($_GET['id']) && $_GET['topic']) {
            $topic = $_GET['topic'];
            $id = $_GET['id'];

            $query = "SELECT * FROM `client_data` WHERE `ques17` IS NULL AND `id`='$id'";
            $result = mysqli_query($con, $query);
            
            if($result) {
                $row = mysqli_fetch_array($result);
                $name = $_FILES['file']['name'];
                $tmp = $_FILES['file']['tmp_name'];
                move_uploaded_file($tmp, '../videos/'.$name);
    
                $sql = "UPDATE `client_data` SET `ques17`='$_POST[question]',`ans17`='$name' WHERE `topic`='$topic'";
                $res = mysqli_query($con, $sql);
            
                if($res) {
                    echo"
                        <script>
                            alert('Seventeen Question added successfully!');
                            window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                        </script>
                    ";
                }
            }    
        }   
    }
?>