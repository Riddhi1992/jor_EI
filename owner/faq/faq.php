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
    <div class="container mb-3">
        <div class="row justify-content-center">
            <div class="col-4" id="instruct_btn">
                <button class="btn btn-secondary"><a class="text-white text-decoration-none" href="instruction.php" target="blank">INSTRUCTIONS</a></button>
            </div>
        </div>
    </div>
    <div class="container border rounded shadow mb-5">
        <h3 class="text-center m-3">START A Q&A</h3>
        <form method="POST" class="m-5" action="" enctype="multipart/form-data">
            <div id='first'>
                <div class='form-floating mb-3'>
                    <input type='text' class='form-control' id='floatingInput1' placeholder='Property Address' name='address' required>
                    <label for='floatingInput1'>Property Address*</label>
                </div>
                <div class='form-floating mb-3'>
                    <input type='text' class='form-control' id='floatingInput2' placeholder='Business type' name='property_type' required>
                    <label for='floatingInput2'>Type of Property*</label>
                </div>
                <!-- <div class='form-floating mb-3'>
                    <input type='text' class='form-control' id='floatingInput3' placeholder='Topic' name='topic' required>
                    <label for='floatingInput3'>Topic</label>
                </div> -->
                <div class="row">
                    <div class="col">
                        <div class='col form-floating mb-3'>
                            <input type='date' class='form-control' id='date' placeholder='Question' name='stdate' required>
                            <label for='date'>Start Date*</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class='form-floating mb-3'>
                            <input type='date' class='form-control' id='endate' placeholder='Question' name='endate' required>
                            <label for='endate'>End Date*</label>
                        </div>
                    </div>
                </div>
                <div class='form-floating mb-3'>
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name='description' style="height: 100px"></textarea>
                    <label for='floatingTextarea2'>Notes</label>
                </div>
                <div class='mb-3'>
                    <label for='formFile' class='form-label'>Upload the property image</label>
                    <input class='form-control' type='file' id='formFile' name='file'>
                </div>
                <div class='form-group'>
                    <label class="form-check-label" for="inlineRadio1">Topic: </label>    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="buyLease" id="inlineRadio1" value="Purchase">
                        <label class="form-check-label" for="inlineRadio1">Purchase</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="buyLease" id="inlineRadio2" value="Lease">
                        <label class="form-check-label" for="inlineRadio2">Lease</label>
                    </div>
                    
                    <!-- <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="buyLease" id="inlineRadio2" value="Lease">
                        <label class="form-check-label" for="inlineRadio2">Other</label>
                    </div> -->
                </div>

                <div class='row mb-3 mt-5'>
                    <div class='col'>
                        <!-- <a href='#' type='submit' role='button' class='btn btn-primary w-100' name='save' id='prev-2' value='SAVE'>Previous</a> -->
                    </div>
                    <div class='col'>
                        <button type='submit' class='btn btn-primary w-100' name='save' value='SAVE'>Save & Add Next</button>
                    </div>
                    <div class="col"></div>
                    <!-- <div class="col">
                        <button type='submit' class='btn btn-danger w-100' name='save_finish' value='Save & Finish'><a class='text-light text-decoration-none' href='fetchdata.php'>Save & Finish</a></button>
                    </div> -->
                </div>
            </div>
        </form>
    </div>
    <?php include "./includes/footer.php" ?>
    <!-- <script src="./includes/navbar.js"></script> -->
</body>
</html>

<?php 
    if(isset($_POST['save'])) {
        $name = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];

        move_uploaded_file($tmp, '../images/'.$name);

        $sql_user = "SELECT `id`, `company_name`, `business_type`, `user_name` FROM `registered_users` WHERE `user_name`='$_SESSION[username]' ";
        $res_user = mysqli_query($con, $sql_user);
        $row_data = mysqli_fetch_array($res_user);
        $company_name = $row_data['company_name'];
        $business_type = $row_data['business_type'];

        if($res_user) {
            $sql = "INSERT INTO `client_data`(`company_name`, `business_type`, `address`, `property_type`, `startDate`, `endDate`, `description`, `image`, `buy_lease`) 
            VALUES ('$company_name','$business_type','$_POST[address]','$_POST[property_type]','$_POST[stdate]', '$_POST[endate]', '$_POST[description]','$name', '$_POST[buyLease]')";
            $res = mysqli_query($con, $sql);

            if($res == 1) {
                echo "
                    <script>
                        alert('Data inserted Successfully!!!');
                        window.location.href = 'faq_intro.php?property_type=$_POST[property_type]&option=$_POST[buyLease]';
                        // window.location.href = 'faq_intro.php?property_type=$_POST[property_type]&option=$_POST[buyLease]';
                    </script>
                ";
            }
            else {
                echo "
                    <script>
                        // alert('Error');
                        alert($res);
                    </script>
                ";
            }
        }

    }
?>