<?php 
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    $con = mysqli_connect("localhost", "root", "", "registered_user");

    if(mysqli_connect_error()) {
        echo"<script>alert('Cannot connect to database');</script>";
        exit();
    }

    session_start();
    // $result = $con->query($query);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>

    <div class="container">
        <h3 class="text-center m-3">Frequently Asked Questions List</h3>
        <!-- <p id="messagedisplay" class="mt-5"></p> -->
        <!-- <div id="displaydata"></div> -->

        <?php 
            $result = mysqli_query($con, "SELECT COUNT(*) FROM owner_datas");
            $row = mysqli_fetch_array($result);

            $total = $row[0];

            if($total <= 19) {
                echo "
                    <div class='border p-4 shadow rounded'>
                        <form method='POST' action='' enctype='multipart/form-data'>
                            <div class='form-floating mb-3'>
                                <input type='text' class='form-control' id='floatingInput0' placeholder='Question' name='question' required>
                                <label for='floatingInput0'>Question</label>
                            </div>
                            <div class='mb-3'>
                                <label for='formFile' class='form-label'>Upload your Video here</label>
                                <input class='form-control' type='file' id='formFile' name='file'>
                            </div>
                            <div class='row'>
                ";
            }
        ?>
        <!-- <div class="border p-4 shadow rounded">
            <form method='POST' action='' enctype="multipart/form-data">
                <div class='form-floating mb-3'>
                    <input type='text' class='form-control' id='floatingInput0' placeholder='Question' name='question' required>
                    <label for='floatingInput0'>Question</label>
                </div>
                <div class='mb-3'>
                    <label for='formFile' class='form-label'>Upload your Video here</label>
                    <input class='form-control' type='file' id='formFile' name='file'>
                </div>
                <div class='row'> -->
                    <?php 
                        $result = mysqli_query($con, "SELECT COUNT(*) FROM owner_datas");
                        $row = mysqli_fetch_array($result);

                        $total = $row[0];

                        if($total <= 19) {
                            echo "
                                <div class='col'>
                                    <button type='submit' class='btn btn-primary w-50' name='save' value='SAVE'>Save & Add Next</button>
                                </div>
                                <div class='col'>
                                    <a class='btn btn-primary w-50' href='fetchdata.php'>Save & Finish</a>
                                </div>
                            ";
                        }
                        else {
                            echo "
                                <div class='row mt-5'>
                                    <div class='col d-flex justify-content-center'>
                                        <a class='btn btn-primary w-50' href='contact_Admin.php'>Add more FAQ</a>
                                    </div>
                                    <div class='col d-flex justify-content-center'>
                                        <a class='btn btn-primary w-50' href='fetchdata.php'>View All FAQ</a>
                                    </div>
                                </div>
                                ";        
                        }
                    ?>
                    <!-- <div class='col'>
                        <button type='submit' class='btn btn-primary w-50' id='displaybtn' name='save_finish' value='Display Data'>Save & Finish</button>
                    </div>
                    <div class='col'>
                        <button type='submit' class='btn btn-primary w-50' id='displaybtn' name='save_finish' value='Display Data'><a class='btn-primary' href='fetchdata.pho'>Save & Finish</a></button>
                    </div> -->
                    <!-- <div class='col'>
                        <button type='submit' class='btn btn-primary w-75' name='save_finish'>Save & Finish</button>
                    </div> -->
                    <?php
                    
                    echo "
                </div>
            </form>
        </div>
        ";
        ?>
        
        </div>
    </body>
</html>

<?php 
    if(isset($_POST['save'])) {
        $name = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];

        move_uploaded_file($tmp, "../videos/".$name);

        $sql = "INSERT INTO owner_datas (question, video, date_updated) VALUES ('$_POST[question]','$name', NOW())";
        $res = mysqli_query($con, $sql);

        if($res == 1) {
            echo"
                <script>
                    alert('Video 🎥 inserted Successfully!!!');
                    // alert($res)
                    window.location.href = 'faq.php';
                </script>
            ";
        }
        
    }

    
?>

