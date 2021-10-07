<?php 
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>
    <body>
        <?php include "./includes/navbar.php" ?>

        <!-- <script>
            alert('$_SESSION[username]');
        </script> -->

        <?php 
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
                $query = "SELECT * FROM `registered_users`";
                $result = mysqli_query($con, $query);
                
                if($result) {
                    $query = "SELECT * FROM `registered_users` WHERE `user_name`= '$_SESSION[username]'";
                    $res = mysqli_query($con, $query);
                    $row = $res->fetch_assoc();
                    $id=$row['id'];
                    $firstname = $row['first_name'];
                    $lastname = $row['last_name'];
                    $user_name = $row['user_name'];
                    $email = $row['email'];
                    $user_type = $row['user_type'];
                    $verification_code = $row['verification_code'];
                    $password = $row['password'];
                    $chars = str_split($password);
                    
                    if($res) {
                        echo "
                            <div class='container d-flex justify-content-center'>
                                <div class='shadow mt-5 p-5 w-50'>
                                    <h3 class='text-center mb-5'>Profile Page</h3> 
                                    <form method='POST' action=''>
                                        <div class='form-floating mb-3 visually-hidden'>
                                            <input type='text' class='form-control' id='id' placeholder='id' name='id' value='$id'>
                                            <label for='id'>ID</label>
                                        </div>
                                        <div class='form-floating mb-3'>
                                            <input type='text' class='form-control' id='firstname' placeholder='firstname' name='firstname' value='$firstname'>
                                            <label for='firstname'>First Name</label>
                                        </div>
                                        <div class='form-floating mb-3'>
                                            <input type='text' class='form-control' id='lastname' placeholder='lastname' name='lastname' value='$lastname'>
                                            <label for='lastname'>Last Name</label>
                                        </div>
                                        <div class='form-floating mb-3'>
                                            <input type='text' class='form-control' id='username' placeholder='username' name='user_name' value='$user_name'>
                                            <label for='username'>Username</label>
                                        </div>
                                        
                                        <div class='form-floating mb-3'>
                                            <input type='email' class='form-control' id='floatingInput' placeholder='name@example.com' name='email' value='$email'>
                                            <label for='floatingInput'>Email address</label>
                                        </div>
                                        <div class='form-floating mb-3 visually-hidden'>
                                            <input type='text' class='form-control' id='user_type' placeholder='User Type' name='user_type' value='$user_type'>
                                            <label for='user_type'>User Type</label>
                                        </div>
                                        <div class='form-floating mb-3 visually-hidden'>
                                            <input type='text' class='form-control' id='verification_code' placeholder='verification_code' name='verification_code' value='$verification_code'>
                                            <label for='verification_code'>verification_code</label>
                                        </div>
                                        <div class='form-floating mb-3'>
                                            <input type='password' class='form-control' id='floatingPassword' placeholder='Password' name='password' value='$password'>
                                            <label for='floatingPassword'>Password</label>
                                        </div>
                                        <div class='d-flex justify-content-center'>
                                            <button type='submit' class='btn btn-secondary' name='update'>Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        ";
                    }
                }
            }

            if(isset($_POST['update'])) {
                $id = $_POST['id'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $user_name = $_POST['user_name'];
                $email = $_POST['email'];
                $user_type = $_POST['user_type'];
                $verification_code = $_POST['verification_code'];
                $password = $_POST['password'];

                $query = "UPDATE `registered_users` SET `first_name`='$firstname',`last_name`='$lastname',`company_name`='',`user_name`='$user_name',`email`='$email',`password`='$password',`business_type`='', `user_type`='$user_type',`verification_code`='$verification_code'  WHERE `id`=$id";
                $result = $con->query($query);

                if($result == TRUE) {
                    echo"
                        <script>
                            alert('Updated Successfully!');
                            window.location.href = 'profile.php';
                        </script>
                    ";
                }
                else {
                    echo "Error";
                }
            }
        ?>
    </body>
</html>


<!-- 
    <div class='container border pt-4 pb-4'>
                                <div class='d-flex justify-content-center'>
                                    <div class='row w-75'>
                                        <div class='col border rounded'>
                                            <p class='mt-3'>First Name: <span>$firstname</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-2 border rounded'>
                                        <p class='mt-3'>Last Name</p>
                                    </div>
                                    <div class='col-6 border rounded'>
                                        <p class='mt-3'>$lastname</p>
                                    </div>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-2 border rounded'>
                                        <p class='mt-3'>Username</p>
                                    </div>
                                    <div class='col-6 border rounded'>
                                        <p class='mt-3'>$user_name</p>
                                    </div>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-2 border rounded'>
                                        <p class='mt-3'>Email</p>
                                    </div>
                                    <div class='col-6 border rounded'>
                                        <p class='mt-3'>$email</p>
                                    </div>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-2 border rounded'>
                                        <p class='mt-3'>Password</p>
                                    </div>
                                    <div class='col-6 border rounded'>
                                        <p class='mt-3' type='password' id='myPass'>";
                                            ?>
                                            <?php 
                                            // foreach($chars as $char) {
                                                // $char = '*';
                                                // echo "$char";
                                            // }
                                            // echo "
                            //             </p>
                            //         </div>
                            //     </div>
                            // </div> -->