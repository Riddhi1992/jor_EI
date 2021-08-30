<!-- Register Modal start -->
        
<div class="border border-secondary rounded m-5">
                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title" id="exampleModalToggleLabel">USER REGISTER FORM</h5>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="login_register.php">
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
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword1" placeholder="Password" name="repassword" required>
                                <label for="floatingPassword1">Re-enter Password</label>
                            </div>

                            <div class="selectmenu form-floating mb-3">
                                <select class="form-select" aria-label="Floating label select example" id="selection" name="useradmin" onchange="selectOption()" required>
                                    <option value="Selection" selected>Open this select menu</option>
                                    <option value="User">User</option>
                                    <option value="Owner">Owner</option>
                                    <option value="Admin">Admin</option>
                                    
                                </select>
                                <label for="floatingSelect">Type of User</label>
                            </div>
                            <div id="ownerActivities" style="display: none">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput2" placeholder="Company Name" name="companyname">
                                    <label for="floatingInput2">Company Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="selection" onchange="selectBusiness()">
                                        <option selected>Open this select menu</option>
                                        <option value="Medical">Medical</option>
                                        <option value="Education">Education</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <label for="floatingSelect">Types of Business</label>
                                </div>
                                <div id="otherBusiness" style="display: none">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput5" placeholder="Business type" name="selection">
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