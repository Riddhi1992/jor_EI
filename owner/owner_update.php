<?php 
    include "../connection.php";
    session_start();

    if(isset($_POST['update'])) {
        $firstname = $_POST['firstname'];
        $user_id = $_POST['id'];
        $lastname = $_POST['lastname'];
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $repassword = $_POST['repassword'];
        $useradmin = $_POST['useradmin'];
        $companyname = $_POST['companyname'];
        $selection = $_POST['selection'];
        $selection1 = $_POST['selection1'];

        if($_POST['selection'] == 'Realtor') {
            $query = "UPDATE `registered_users` SET `first_name`='$firstname',`last_name`='$lastname',`company_name`='$companyname',`user_name`='$user_name',`email`='$email',`password`='$password',`business_type`='$selection',`user_type`='$useradmin' WHERE `id`='$user_id'";
        }
        else {
            $query = "UPDATE `registered_users` SET `first_name`='$firstname',`last_name`='$lastname',`company_name`='$companyname',`user_name`='$user_name',`email`='$email',`password`='$password',`business_type`='$selection1',`user_type`='$useradmin' WHERE `id`='$user_id'";
        }

        // $query = "UPDATE `registered_users` SET `first_name`='$firstname',`last_name`='$lastname',`company_name`='$companyname',`user_name`='$user_name',`email`='$email',`password`='$password',`business_type`='$selection',`user_type`='$useradmin' WHERE `id`='$user_id'";

        $result = $con->query($query);

        if($result == TRUE) {
            echo"
                <script>
                    alert('Updated Successfully!');
                    window.location.href = 'owner_view.php';
                </script>
            ";
        }
        else {
            echo "Error";
        }
    }

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $query = "SELECT * FROM `registered_users` WHERE `id`='$user_id'";

        $result = $con->query($query);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $user_id = $row['id'];
                $firstname = $row['first_name'];
                $lastname = $row['last_name'];
                $user_name = $row['user_name'];
                $email = $row['email'];
                $password = $row['password'];
                // $repassword = $row['re_password'];
                $useradmin = $row['user_type'];
                $companyname = $row['company_name'];
                $selection = $row['business_type'];
            }
        ?>

        <!DOCTYPE html>
        <html lang="en">
            <head>
                <?php include "./includes/header.php" ?>
            </head>
            <body>
                <?php include "./includes/navbar.php" ?>
                <div class="mt-5"></div>
                <div class="container border rounded shadow">
                    <h2 class="text-center mt-5">User Update Form</h2>
                    <div class='p-4'>
                        <form method="POST" action="owner_update.php">
                            <div class="form-floating mb-3">
                                <input type="hidden" class="form-control" id="floatingInput10" placeholder="First Name" name="id" value="<?php echo $user_id; ?>" required>
                                <label for="floatingInput10">ID</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput0" placeholder="First Name" name="firstname" value="<?php echo $firstname; ?>" required>
                                <label for="floatingInput0">First Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput1" placeholder="Last Name" name="lastname" value="<?php echo $lastname; ?>" required>
                                <label for="floatingInput1">Last Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput3" placeholder="Username" name="user_name" value="<?php echo $user_name; ?>" required>
                                <label for="floatingInput3">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput4" placeholder="name@example.com" name="email" value="<?php echo $email; ?>" required>
                                <label for="floatingInput4">E-mail</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword0" placeholder="Password" name="password" value="<?php echo $password; ?>" required>
                                <label for="floatingPassword0">Password</label>
                            </div>
                            <!-- <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword1" placeholder="Password" name="repassword" value="<?php // echo $repassword; ?>" required>
                                <label for="floatingPassword1">Re-enter Password</label>
                            </div> -->

                            <div class="selectmenu form-floating mb-3">
                                <select class="form-select" aria-label="Floating label select example" id="selection" name="useradmin" value="<?php echo $useradmin; ?>" onchange="selectOption()" required>
                                    <option value="Selection" selected>Open this select menu</option>
                                    <option value="User">User</option>
                                    <option value="Owner">Owner</option>
                                    <option value="Admin">Admin</option>                    
                                </select>
                                <label for="floatingSelect">Type of User</label>
                            </div>
                            <div id="ownerActivities" style="display: none">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput2" placeholder="Company Name" name="companyname" value="<?php echo $companyname; ?>">
                                    <label for="floatingInput2">Company Name</label>
                                </div>
                                <div id="business" class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="selection" onchange="selectBusiness()">
                                        <option selected>Open this select menu</option>
                                        <option value="Realtor">Realtor</option>
                                        <!-- <option value="Education">Medical</option> -->
                                        <option value="Other">Other</option>
                                    </select>
                                    <label for="floatingSelect">Types of Business</label>
                                </div>
                                <div id="otherBusiness" style="display: none">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="selection1" id="floatingInput5" placeholder="Business type">
                                        <label for="floatingInput5">Type of Business</label>
                                    </div>
                                </div>
                            </div>
                            <div id="userActivities" style="display: none"></div>

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