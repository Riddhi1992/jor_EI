<?php 
    require('connection.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include "./includes/header.php" ?>

    </head>
    <body>
        <?php include "./includes/navbar.php" ?>

        <!-- Login Form start -->
        <?php include "./includes/loginForm.php" ?>
        <!-- Login Form end -->
        <div class="container d-flex justify-content-center">
            <div id="indexLoginForm" class='shadow mt-5'>
                <h3 class="text-center">LOGIN</h3>
                <form id="login-form" method="POST" action="login_register.php">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email_username">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <!-- <button class="btn btn-info">Login</button> -->
                    <div class="mt-3 mb-3" >
                        <button class="btn text-white text-center" id="loginBtn" data-bs-target="" type="submit" data-bs-toggle="modal" data-bs-dismiss="modal" name="login">LOGIN</button>
                    </div>
                </form>
                <div class="d-flex justify-content-end">
                    <a class='btn btn-link' data-bs-toggle='modal' href='#exampleModalToggle3' role='button'>Forgot Password ?</a>
                </div>
            </div>
        </div>
        
        <?php include "./includes/footer.php" ?>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>