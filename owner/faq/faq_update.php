<?php 
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();

    if(isset($_POST['update'])) {
        $question = $_POST['question'];
        $id = $_POST['id'];
        $name = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];

        move_uploaded_file($tmp, "../videos/".$name);


        $query = "UPDATE `owner_datas` SET `question`='$question',`video`='$name', `date_updated`=NOW() WHERE `id`='$id'";

        $result = $con->query($query);

        if($result == TRUE) {
            echo"
                <script>
                    alert('Updated Successfully!');
                    window.location.href = 'fetchdata.php';
                </script>
            ";
        }
        else {
            echo "Error";
        }
    }

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $query = "SELECT * FROM `owner_datas` WHERE `id`='$user_id'";

        $result = $con->query($query);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $user_id = $row['id'];
                $question = $row['question'];
                $video = $row['video'];
            }
        ?>

        <!DOCTYPE html>
        <html lang="en">
            <?php include "./includes/header.php" ?>

            <body>
                <?php include "./includes/navbar.php" ?>
                <div class="container">
                    <h2 class="text-center mt-5">FAQ Update Form</h2>
                    <div class='border p-4 shadow rounded'>
                        <form method='POST' action='' enctype='multipart/form-data'>
                            <div class="form-floating mb-3">
                                <input type="hidden" class="form-control" id="floatingInput10" placeholder="First Name" name="id" value="<?php echo $user_id; ?>" required>
                                <label for="floatingInput10">ID</label>
                            </div>
                            <div class='form-floating mb-3'>
                                <input type='text' class='form-control' id='floatingInput0' placeholder='Question' name='question' value='<?php echo $question; ?>' required>
                                <label for='floatingInput0'>Question</label>
                            </div>
                            <div class='mb-3'>
                                <label for='formFile' class='form-label' >Upload your Video here</label>
                                <input class='form-control' type='file' id='formFile' name='file' value='<?php echo $video; ?>'>
                            </div>

                            <!-- <button class="btn btn-info">Login</button> -->
                            <div class="modal-footer">
                                <button class="btn btn-info" data-bs-target="" data-bs-toggle="modal" data-bs-dismiss="modal" name="update">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
                <script src="./popup_script.js"></script>
            </body>
        </html>

        <?php 
        } 
        else {

        }
    }

?>