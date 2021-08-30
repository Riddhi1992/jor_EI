<!-- Login Modal start -->
<div class="modal fade popup-container" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">USER LOGIN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
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
                            <div class="mt-3 mb-3">
                                <button class="btn btn-info" data-bs-target="" type="submit" data-bs-toggle="modal" data-bs-dismiss="modal" name="login">LOGIN</button>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <a class='btn btn-link' data-bs-toggle='modal' href='#exampleModalToggle3' role='button'>Forgot Password ?</a>
                        </div>
                        <div id="msg" class="text-danger"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <a class="btn btn-primary m-5" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> -->
        <!-- Login Modal end -->

                <!-- Forgot Password Modal start -->
                <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="height: 400px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">RESET PASSWORD</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="forgot_password.php">
                            <div class="form-floating mb-3 mt-3">
                                <input type="email" class="form-control" id="floatingInput_1" placeholder="name@example.com" name="email">
                                <label for="floatingInput_1">Email</label>
                            </div>
                            <div>Please write the email that you have used while registering to get the code!!!</div>
                            <div class="mt-3 mb-3 d-flex justify-content-center">
                                <button class="btn btn-info" data-bs-target="" data-bs-toggle="modal" data-bs-dismiss="modal" name="send-reset-link">SEND LINK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <a class="btn btn-primary m-5" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> -->
        <!-- Forgot Password Modal end -->

        <?php 
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
                echo"<div class='d-flex justify-content-center'><h1 class='m-5 center'>WELCOME, $_SESSION[username]!</h1></div>";
            }
        ?>