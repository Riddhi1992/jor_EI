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
    <div class="container border rounded shadow">
        <h3 class="text-center m-3">Start a Program</h3>
        <form method="POST" class="m-5" action="" enctype="multipart/form-data">
            <div id='first'>
                <div class='form-floating mb-3'>
                    <input type='text' class='form-control' id='floatingInput1' placeholder='Company Name' name='company_name' required>
                    <label for='floatingInput1'>Company Name</label>
                </div>
                <div class='form-floating mb-3'>
                    <input type='text' class='form-control' id='floatingInput2' placeholder='Business type' name='business_type' required>
                    <label for='floatingInput2'>Type of Business</label>
                </div>
                <div class='form-floating mb-3'>
                    <input type='text' class='form-control' id='floatingInput3' placeholder='Topic' name='topic' required>
                    <label for='floatingInput3'>Topic</label>
                </div>
                <div class='form-floating mb-3'>
                    <input type='text' class='form-control' id='floatingInput4' placeholder='Topic' name='description' required>
                    <label for='floatingInput4'>Description</label>
                </div>
                <div class='mb-3'>
                    <label for='formFile' class='form-label'>Upload the topic image</label>
                    <input class='form-control' type='file' id='formFile' name='file'>
                </div>
                <dic class='form-group'>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="buyLease" id="inlineRadio1" value="Purchase">
                        <label class="form-check-label" for="inlineRadio1">Purchase</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="buyLease" id="inlineRadio2" value="Lease">
                        <label class="form-check-label" for="inlineRadio2">Lease</label>
                    </div>
                </dic>

                <div class='row mb-3 mt-5'>
                    <div class='col'>
                        <!-- <a href='#' type='submit' role='button' class='btn btn-primary w-100' name='save' id='prev-2' value='SAVE'>Previous</a> -->
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
    <!-- <script src="./includes/navbar.js"></script> -->
</body>
</html>

<?php 
    if(isset($_POST['save'])) {
        $name = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];

        move_uploaded_file($tmp, '../images/'.$name);

        $sql = "INSERT INTO `client_data`(`company_name`, `business_type`, `topic`, `description`, `image`, `buy_lease`) VALUES ('$_POST[company_name]','$_POST[business_type]','$_POST[topic]','$_POST[description]','$name', '$_POST[buyLease]')";
        $res = mysqli_query($con, $sql);

        if($res == 1) {
            echo "
                <script>
                    alert('Data inserted Successfully!!!');
                    window.location.href = 'faq01.php?topic=$_POST[topic]&option=$_POST[buyLease]';
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
?>