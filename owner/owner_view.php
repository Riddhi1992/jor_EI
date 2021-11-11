<?php 
    include "../connection.php";
    session_start();

    if(!isset($_SESSION['UID'])) {
        header("location: index.php");
    }

    $time = time();

    $query = "SELECT * FROM registered_users";
    $result = $con->query($query);

?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>

        <div class="container">
            <h3 class="text-center m-5">USER DETAIL PAGE</h3>

            <a class='btn btn-secondary' data-bs-toggle='modal' href='#exampleModalToggle' role='button'> + Add User Detail</a>
            <!-- Modal to insert/update/delete the data start -->
            <div class="modal fade popup-container" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">USER LOGIN</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="owner_process.php">
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
                                        <option value="Admin">Admin</option>
                                        
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
                                    <button class="btn btn-info" data-bs-target="" data-bs-toggle="modal" data-bs-dismiss="modal" name="save">SAVE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal to insert/update/delete the data end -->

            <div class="table-responsive mt-5 mb-5 ">
                <table id="example" class="table table-striped table-hover shadow-lg mt-3 mb-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th>Company Name</th>
                            <th>Type of Business</th>
                            <th>Is Verified?</th>
                            <!-- <th>Online/Offline</th> -->
                            <th>Action</th>
                            <!-- <th>Status</th> -->
                        </tr>
                    </thead>
                    <tbody id="user_grid">
                        <?php 
                            if($result->num_rows>0) {
                                $i = 1;
                                while($row = $result->fetch_assoc()) { 
                                    if(!($row['user_type'] == 'Owner') && !($row['user_type'] == 'Admin')) {
                                    // $last_status = 'Offline';
                                    // $class = "btn-danger";
                                    // if($row['last_login']>$time) {
                                    //     $last_status = 'Online';
                                    //     $class = "btn-success";
                                    // }
                        ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['first_name']; ?></td>
                                        <td><?php echo $row['last_name']; ?></td>
                                        <td><?php echo $row['user_name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['user_type']; ?></td>
                                        <td><?php echo $row['company_name']; ?></td>
                                        <td><?php echo $row['business_type']; ?></td>
                                        <!-- <td><?php // echo $row['is_verified']; ?></td> -->

                                        <?php 
                                            $verified_status = $row['is_verified'];
                                            if ($verified_status == 0) {
                                                $ver_status = "No";
                                            } else if ($verified_status == 1) {
                                                $ver_status = "Yes";
                                            }
                                            echo "<td>".$ver_status."</td>";
                                        ?>

                                        <!-- <td><?php // echo $row['last_login']; ?></td> -->
                                        <!-- <td><button type="button" class="btn <?php // echo $class ?>"><?php // echo $last_status ?></button></td> -->
                                        <td>
                                            <a class="btn btn-info mb-1" href="owner_update.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp;
                                            <!-- <a class='btn btn-danger' data-bs-toggle='modal' href='#static' role='button'><i class="far fa-trash-alt"></i></a> -->
                                        </td>
                                        <?php 
                                            // $status = $row['status'];
                                            // if ($status == 0) {
                                            //     $strstatus = "<a href=useractivate.php?userID=".$row['id'].">Activate User</a>";
                                            // } else if ($status == 1) {
                                            //     $strstatus = "<a class='text-danger' href=usernotactivate.php?userID=".$row['id'].">Deactivate User</a>";
                                            // }
                                            // echo "<td>".$strstatus."</td>";
                                        ?>
                                    </tr>

                                    <?php 
                                    $i++;
                                            }
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <?php include "./includes/footer.php" ?>
        
        <!-- DataTable Plugin Script -->
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>

        <!-- <script>
            // Update user status - Online/Offline
            function updateUserStatus() {
                jQuery.ajax({
                    url: 'update_user_status.php',
                    success: function() {
                    }
                });
            }
            function getUserStatus() {
                jQuery.ajax({
                    url: 'get_user_status.php',
                    success: function(result) {
                        jQuery('#user_grid').html(result);
                    }
                });
            }

            setInterval(function() {
                updateUserStatus();
            }, 5000); //Refresh after every 5 seconds

            setInterval(function() {
                getUserStatus();
            }, 10000); //Refresh after every 10 seconds
        </script> -->

        <!-- Popup Script -->
        <script src="../popup_script.js"></script>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>