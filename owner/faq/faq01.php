<?php 
    include "../../connection.php"; 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <?php include "./includes/header.php" ?>
</head>
<body>
    <?php include "./includes/navbar.php" ?>
    <div class="mt-5"></div>
    <div class="container d-flex justify-content-center">
        <div id="faqForm" class='shadow mt-5'>
            <h3 class="text-center m-3">FAQ form</h3>
            <form method="POST" class="" action="" enctype="multipart/form-data">
                <div id='first'>
                    <div class='form-floating mb-3 visually-hidden'>
                        <input type='text' class='form-control' id='input' placeholder='Company Name' name='id'>
                        <label for='input'>ID</label>
                    </div>
                    <div class="selectmenu form-floating mb-3">
                            <?php 
                                if(isset($_GET['option'])){
                                    $option = $_GET['option'];

                                    if ($option == 'Purchase') {
                                        $sql = "SELECT * FROM `option_Selection` WHERE `purchase_lease` = '$option'";
                                        $result = mysqli_query($con, $sql);
                                        if($result) {
                                            echo "
                                                <select class='form-select' aria-label='Floating label select example' id='selection' name='question' onchange='selectOption()' required>
                                            ";
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "
                                                    <option value='$row[question]'>$row[question]</option>
                                                ";
                                            }
                                            echo "
                                                </select>
                                            ";
                                        }
                                    }
                                    else {
                                        $sql = "SELECT * FROM `option_Selection` WHERE `purchase_lease` = '$option'";
                                        $result = mysqli_query($con, $sql);
                                        if($result) {
                                            echo "
                                                <select class='form-select' aria-label='Floating label select example' id='selection' name='question' onchange='selectOption()' required>
                                            ";
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "
                                                    <option value='$row[question]'>$row[question]</option>
                                                ";
                                            }
                                            echo "
                                                </select>
                                            ";
                                        }
                                    }
                                }
                            ?>           
                        <label for="floatingSelect">Question</label>
                    </div>
                    <!-- <div class='form-floating mb-3'>
                        <input type='text' class='form-control' id='floatingInput0' placeholder='Question' name='question' required>
                        <label for='floatingInput0'>Question</label>
                    </div> -->
                    <div class='mb-3'>
                        <label for='formFile' class='form-label'>Upload your Video here</label>
                        <input class='form-control' type='file' id='formFile' name='file'>
                    </div>
                    <div class='row mb-3 mt-5'>
                        <?php 
                            $query = "SELECT * FROM `registered_users` WHERE `user_name` = '$_SESSION[username]'";
                            $result = mysqli_query($con, $query);
                            $row_data = mysqli_fetch_array($result);

                            if(isset($_GET['id']) && $_GET['address']) {
                                echo "
                                    <div class='col'></div>  
                                    <div class='col'></div>  
                                    <div class='col'>
                                        <button type='submit' class='btn btn-primary w-100' name='update' value='SAVE'>Update</button>
                                    </div>
                                ";
                            }
                            else {
                                echo "
                                    <div class='col'></div>
                                    <div class='col'>
                                        <button type='submit' class='btn btn-primary w-100' name='save' value='SAVE'>Save & Add Next</button>
                                    </div>
                                ";
                                if($row_data['user_type'] == 'Admin') {
                                    echo "
                                        <div class='col'>
                                            <button type='submit' class='btn btn-danger w-100' name='save_finish' value='Save & Finish'><a class='text-light text-decoration-none' href='../../admin/activeFetchdata.php'>Save & Finish</a></button>
                                        </div>
                                    ";
                                }
                                else {
                                    echo "
                                        <div class='col'>
                                            <button type='submit' class='btn btn-danger w-100' name='save_finish' value='Save & Finish'><a class='text-light text-decoration-none' href='activeFetchdata.php'>Save & Finish</a></button>
                                        </div>            
                                    ";
                                }
                                    
                            }
                        ?>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include "./includes/footer.php" ?>
    <script>

    </script>
</body>
</html>

<?php 

    if(isset($_POST['save']) && $_GET['property_type'] && $_GET['option']) {
        $property_type = $_GET['property_type'];
        $option = $_GET['option'];
        $query = "SELECT * FROM `client_data` WHERE `ques1` IS NULL AND `ans1` IS NULL";
        $result = mysqli_query($con, $query);
        $result_fetch = mysqli_fetch_assoc($result);

        if($result) {
            $name = $_FILES['file']['name'];
            $tmp = $_FILES['file']['tmp_name'];
            move_uploaded_file($tmp, '../videos/'.$name);

            $key_sql = "SELECT * FROM `option_Selection` WHERE `question`='$_POST[question]'";
            $key_res = mysqli_query($con, $key_sql);
            $key_row = mysqli_fetch_array($key_res);
            $keyword = $key_row['keywords'];

            if($key_res){
                $sql = "UPDATE `client_data` SET `ques1`='$_POST[question]',`ans1`='$name', `topic_ques01`=CONCAT('$option', ' - ', '$keyword'), `date1`=NOW() WHERE `ques1` IS NULL ORDER BY id DESC LIMIT 1";
                $res = mysqli_query($con, $sql);

                if($res) {
                    echo"
                        <script>
                            alert('First Question updated successfully!');
                            window.location.href = 'faq02.php?property_type=$property_type&option=$option&ques=$_POST[question]';
                        </script>
                    ";
                }
            }
        }        
    }

    if(isset($_POST['update'])) {
        if(isset($_GET['id']) && $_GET['address'] && $_GET['option']) {
            $address = $_GET['address'];
            $id = $_GET['id'];
            $opt = $_GET['option'];

            $query = "SELECT * FROM `client_data` WHERE `ques1` IS NULL AND `id`='$id'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);
            $visCon = $row['visitor_counter'];
            
            if($result) {
                $name = $_FILES['file']['name'];
                $tmp = $_FILES['file']['tmp_name'];
                move_uploaded_file($tmp, '../videos/'.$name);

                $key_sql = "SELECT * FROM `option_Selection` WHERE `question`='$_POST[question]'";
                $key_res = mysqli_query($con, $key_sql);
                $key_row = mysqli_fetch_array($key_res);
                $keyword = $key_row['keywords'];
                
                if($key_res) {
                    $sql = "UPDATE `client_data` SET `ques1`='$_POST[question]',`ans1`='$name', `topic_ques01`=CONCAT('$opt', ' - ', '$keyword'), `date1`=NOW() WHERE `id`='$id'";
                    $res = mysqli_query($con, $sql);
                
                    if($res ) {
                        echo"
                            <script>
                                alert('First Question added successfully!');
                                window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$opt';
                            </script>
                        ";
                    }
                }

                
            }    
        }   
    }
?>