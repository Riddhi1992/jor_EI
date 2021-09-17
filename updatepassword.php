<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User - Login Page</title>

        <!-- CSS -->
        <link rel="stylesheet" href="styles.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <?php 
            require("connection.php");

            if(isset($_GET['email']) && isset($_GET['reset_token'])) {
                date_default_timezone_set('America/Los_Angeles');
                $date = date("Y-m-d");
                $query = "SELECT * from `registered_users` WHERE `email`='$_GET[email]' AND `resettoken`='$_GET[reset_token]' AND `resettokenexpire`='$date'";
                $result = mysqli_query($con, $query);
                if($result) {
                    if(mysqli_num_rows($result) == 1) {
                        echo "
                            <div class='d-flex justify-content-center m-5'>
                                <h1 class='m-5'>DrHologram</h1>
                            </div>
                            <div class='d-flex justify-content-center m-5'>
                                <form method='POST' class='w-50 border border-primary p-5'>
                                    <div class='d-flex justify-content-center'>
                                        <h3 class='mb-5'>Create New Password</h3>
                                    </div>
                                    <div class='form-floating'>
                                        <input type='password' class='form-control' id='floatingPassword' placeholder='Password' name='password'>
                                        <label for='floatingPassword'>Password</label>
                                    </div>
                                    <!-- <button class='btn btn-info'>Login</button> -->
                                    <div class='mt-3 mb-3 d-flex justify-content-center'>
                                        <button class='btn btn-info' type='submit' name='updatepassword'>UPDATE</button>
                                    </div>
                                    <div>
                                        <input type='hidden' name='email' value='$_GET[email]'>
                                    </div>
                                </form>
                            </div>
                        ";
                    }
                    else {
                        echo "
                            <script>
                                alert('Invalid or Expired Link');
                                window.location.href='index.php';
                            </script>
                        ";    
                    }
                }
                else {
                    echo "
                        <script>
                            alert('Server Down! try again later');
                            window.location.href='index.php';
                        </script>
                    ";
                }

            }
        ?>

        <?php 
            if(isset($_POST['updatepassword'])) {
                // $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
                // $pass = $_POST['password'];
                $update = "UPDATE `registered_users` SET `password`='$_POST[password]',`resettoken`=NULL,`resettokenexpire`=NULL WHERE `email`='$_POST[email]'";
                if(mysqli_query($con, $update)) {
                    echo "
                        <script>
                            alert('Password updated successfully!');
                            window.location.href='index.php';
                        </script>
                    ";
                }
                else {
                    echo "
                        <script>
                            alert('Server Down! try again later');
                            window.location.href='index.php';
                        </script>
                    ";
                }
            }
            else {

            }
        ?>
    </body>
</html>