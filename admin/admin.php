<?php 
    include "../connection.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- All meta tag -->
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
        <div class="d-flex justify-content-center">
            <h2 class="">DrHologram</h2>
        </div>
        <!-- Header start -->
        <header class="container">    
            <!-- Nav start -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown link
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Nav end -->

            <!-- <button class='btn btn-secondary' action='register.php'>REGISTER</button> -->
            <!-- <a class='btn btn-secondary' data-bs-toggle='modal' href='http://localhost:8000/LoginSystem/register.php' role='button'>REGISTER</a> -->
            <?php 
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
                    echo"
                        <div>
                            WELCOME, $_SESSION[username]! - <a class='btn btn-danger' href='../logout.php' role='button'>LOGOUT</a>
                        </div>
                    ";
                }
                else {
                    echo"
                    <!-- login button start -->
                    <div class='sign-in-up'>
                        <!-- <button type='button' class='btn btn-secondary'>LOGIN</button> -->
                        <a class='btn btn-secondary' data-bs-toggle='modal' href='#exampleModalToggle' role='button'>LOGIN</a>
                        <form action='register.php'>
                            <button class='btn btn-secondary'>REGISTER</button>
                        </form>
                    </div>
                    <!-- login button end -->
                    ";
                }
            ?>
        </header>

        <div class="container">
            <h3 class="text-center m-5">Admin Page</h3>
            
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
                            <form method="POST" action="admin_process.php">
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
                                    <button class="btn btn-info" data-bs-target="" data-bs-toggle="modal" data-bs-dismiss="modal" name="save">SAVE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal to insert/update/delete the data end -->
        </div>

        <?php 
            // if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
            //     echo"<div class='d-flex justify-content-center'><h1 class='m-5 center'>WELCOME, $_SESSION[username]!</h1></div>";
            // }
        ?>

        <!-- Popup Script -->
        <script src="./popup_script.js"></script>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>