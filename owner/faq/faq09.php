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
    <!-- <title>Document</title> -->
    <?php include "./includes/header.php" ?>
</head>
<body>
    <?php include "./includes/navbar.php" ?>
    <div class="mt-5"></div>
    <div class="container d-flex justify-content-center">
        <div id="faqForm" class='shadow mt-5'>
            <h3 class="text-center m-3">FAQ form</h3>
            <form method="POST" class="" action="" enctype="multipart/form-data">
                <div id="" class="">
                    <div class='form-floating mb-3 visually-hidden'>
                        <input type='text' class='form-control' id='input' placeholder='Company Name' name='id'>
                        <label for='input'>ID</label>
                    </div>
                    <div class="selectmenu form-floating mb-3">
                        <select class="form-select" aria-label="Floating label select example" id="selection" name="question" onchange="selectOption()" required>
                            <option value="Selection" selected>Select Ninth question</option>
                            <?php 
                                if(isset($_GET['option']) || $_GET['id']){
                                    $option = $_GET['option'];
                                    $id = $_GET['id'];
                                    // $ques = $_GET['ques'];

                                    $sql = "SELECT * FROM `option_Selection` WHERE `purchase_lease` = '$option'";
                                    $result = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_assoc($result);

                                    $query = "SELECT * FROM `client_data` ORDER BY id DESC LIMIT 1";
                                    $res = mysqli_query($con, $query);
                                    $row_fetch = mysqli_fetch_assoc($res);
                                    $ques1 = $row_fetch['ques1']; 
                                    $ques2 = $row_fetch['ques2']; 
                                    $ques3 = $row_fetch['ques3']; 
                                    $ques4 = $row_fetch['ques4']; 
                                    $ques5 = $row_fetch['ques5']; 
                                    $ques6 = $row_fetch['ques6']; 
                                    $ques7 = $row_fetch['ques7']; 
                                    $ques8 = $row_fetch['ques8']; 

                                    $idQuery = "SELECT * FROM `client_data` WHERE `id`='$id'";
                                    $idRes = mysqli_query($con, $idQuery);
                                    $idRow = mysqli_fetch_assoc($idRes);
                                    $q1 = $idRow['ques1'];
                                    $q2 = $idRow['ques2'];
                                    $q3 = $idRow['ques3'];
                                    $q4 = $idRow['ques4'];
                                    $q5 = $idRow['ques5'];
                                    $q6 = $idRow['ques6'];
                                    $q7 = $idRow['ques7'];
                                    $q8 = $idRow['ques8'];

                                    $sql2 = "SELECT * FROM `option_Selection` WHERE `purchase_lease` = '$option' AND NOT `question`='$ques1' AND NOT `question`='$ques2' AND NOT `question`='$ques3' AND NOT `question`='$ques4' AND NOT `question`='$ques5' AND NOT `question`='$ques6' AND NOT `question`='$ques7' AND NOT `question`='$ques8' AND NOT `question`='$q1' AND NOT `question`='$q2' AND NOT `question`='$q3' AND NOT `question`='$q4' AND NOT `question`='$q5' AND NOT `question`='$q6' AND NOT `question`='$q7' AND NOT `question`='$q8'";
                                    $res2 = mysqli_query($con, $sql2);

                                    if ($option == 'Purchase') {
                                        if($result) {
                                            if($res2) {
                                                while ($row = mysqli_fetch_assoc($res2)) {
                                                    echo "
                                                        <option value='$row[question]'>$row[question]</option>
                                                    ";
                                                }
                                            }
                                        }
                                    }
                                    else {
                                        if($result) {
                                            if($res2) {
                                                while ($row = mysqli_fetch_assoc($res2)) {
                                                    echo "
                                                        <option value='$row[question]'>$row[question]</option>
                                                    ";
                                                }
                                            }
                                        }
                                    }
                                }
                            ?>           
                        </select>
                        <label for="floatingSelect">Question</label>
                    </div>
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
    <!-- <script type="text/javascript" src="./includes/nextPrev.js"></script> -->
</body>
</html>


<?php 

    if(isset($_POST['save']) && $_GET['property_type'] && $_GET['option']) {
        $property_type = $_GET['property_type'];
        $option = $_GET['option'];
        $string;
        $query = "SELECT * FROM `client_data` WHERE `ques9` IS NULL AND `ans9` IS NULL";
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

            if($key_res) {
                $sql = "UPDATE `client_data` SET `ques9`='$_POST[question]',`ans9`='$name',`topic_ques09`=CONCAT('$option', ' - ', '$keyword'), `date9`=NOW() WHERE `ques9` IS NULL ORDER BY id DESC LIMIT 1";
                $res = mysqli_query($con, $sql);
            
                if($res) {
                    echo"
                        <script>
                            alert('Ninth Question updated successfully!');
                            window.location.href = 'faq10.php?property_type=$property_type&option=$option';
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
            $string;

            $query = "SELECT * FROM `client_data` WHERE `ques5` IS NULL AND `id`='$id'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);
            $visCon = $row['visitor_counter'];

            if($_POST['question'] == 'Is the price firm?') {
                $string = 'price';
            }
            
            if($result) {
                $name = $_FILES['file']['name'];
                $tmp = $_FILES['file']['tmp_name'];
                move_uploaded_file($tmp, '../videos/'.$name);

                $key_sql = "SELECT * FROM `option_Selection` WHERE `question`='$_POST[question]'";
                $key_res = mysqli_query($con, $key_sql);
                $key_row = mysqli_fetch_array($key_res);
                $keyword = $key_row['keywords'];

                if($key_res) {
                    $sql = "UPDATE `client_data` SET `ques9`='$_POST[question]',`ans9`='$name',`topic_ques09`=CONCAT('$opt', ' - ', '$keyword'), `date9`=NOW() WHERE `id`='$id'";
                    $res = mysqli_query($con, $sql);
                
                    if($res) {
                        echo"
                            <script>
                                alert('Ninth Question added successfully!');
                                window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$opt';
                            </script>
                        ";
                    }
                }
            }    
        }   
    }
?>