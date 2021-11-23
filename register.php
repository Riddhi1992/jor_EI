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
        <!-- Login Modal start -->
        <?php include "./includes/loginForm.php" ?>
        <!-- Login Modal end -->

        <!-- Register Modal start -->        
                <div class="container d-flex justify-content-center">
                    <div id="indexLoginForm" class="shadow mt-5">
                        <h3 class="text-center mt-3" id="exampleModalToggleLabel">USER REGISTER FORM</h3>
                        <form class="" method="POST" action="login_register.php">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput0" placeholder="First Name" name="firstname" required>
                                <label for="floatingInput0">First Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput1" placeholder="Last Name" name="lastname" required>
                                <label for="floatingInput1">Last Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput3" placeholder="Username" name="user_name" required>
                                <label for="floatingInput3">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput4" placeholder="name@example.com" name="email" required>
                                <label for="floatingInput4">E-mail</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword0" placeholder="Password" name="password" required>
                                <label for="floatingPassword0">Password</label>
                            </div>
                            <!-- <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword1" placeholder="Password" name="repassword" required>
                                <label for="floatingPassword1">Re-enter Password</label>
                            </div> -->

                            <div class="selectmenu form-floating mb-3">
                                <select class="form-select" aria-label="Floating label select example" id="selection" name="useradmin" onchange="selectOption()" required>
                                    <option value="Selection" selected>Open this select menu</option>
                                    <!-- <option value="User">User</option> -->
                                    <option value="Owner">Owner</option>
                                    <!-- <option value="Admin">Admin</option> -->
                                    
                                </select>
                                <label for="floatingSelect">Type of User</label>
                            </div>
                            <div id="ownerActivities" style="display: none">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput2" placeholder="Company Name" name="companyname">
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
                                <button class="btn btn-info" data-bs-target="" data-bs-toggle="modal" data-bs-dismiss="modal" name="register">REGISTER</button>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="modal-footer">
                        <button class="btn btn-info" data-bs-target="" data-bs-toggle="modal" data-bs-dismiss="modal" name="register">REGISTER</button>
                    </div> -->
                </div>
        <!-- Register Modal end -->
        
        <script src="./popup_script.js"></script>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>