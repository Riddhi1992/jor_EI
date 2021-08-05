<?php 
    include "../connection.php";
    session_start();

    $query = "SELECT * FROM registered_users";

    $result = $con->query($query);

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
        <link rel="stylesheet" href="../styles.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/b-html5-1.7.1/b-print-1.7.1/cr-1.5.4/date-1.1.0/fc-3.3.3/fh-3.1.9/kt-2.6.2/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.4/sb-1.1.0/sp-1.3.0/sl-1.3.3/datatables.min.css"/>

        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script> -->
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script> -->
        <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/b-html5-1.7.1/b-print-1.7.1/cr-1.5.4/date-1.1.0/fc-3.3.3/fh-3.1.9/kt-2.6.2/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.4/sb-1.1.0/sp-1.3.0/sl-1.3.3/datatables.min.js"></script> -->
        
        <!-- DataTable -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

        <script src="https://kit.fontawesome.com/970b4cc451.js" crossorigin="anonymous"></script>
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
            <h1 class="text-center m-5">Admin Page</h1>

            <a class='btn btn-secondary mb-5' data-bs-toggle='modal' href='#exampleModalToggle' role='button'> + Add User Detail</a>
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

            <div class="table-responsive">
                <table id="example" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Re-Password</th>
                            <th>User Type</th>
                            <th>Company Name</th>
                            <th>Type of Business</th>
                            <th>Verification Code</th>
                            <th>Is Verified?</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if($result->num_rows>0) {
                                while($row = $result->fetch_assoc()) { 
                        ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['first_name']; ?></td>
                                        <td><?php echo $row['last_name']; ?></td>
                                        <td><?php echo $row['user_name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['re_password']; ?></td>
                                        <td><?php echo $row['user_type']; ?></td>
                                        <td><?php echo $row['company_name']; ?></td>
                                        <td><?php echo $row['business_type']; ?></td>
                                        <td><?php echo $row['verification_code']; ?></td>
                                        <td><?php echo $row['is_verified']; ?></td>
                                        <td>
                                            <a class="btn btn-info mb-1" href="admin_update.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp;
                                            <a class='btn btn-danger' data-bs-toggle='modal' href='#static' role='button'><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="static" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-center" id="staticBackdropLabel">Are you sure, you want to delete the record mentioned below?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Firstname: <span class="badge bg-secondary"><?php echo $row['first_name']; ?></span></p>
                                                <p>Lastname: <span class="badge bg-secondary"><?php echo $row['last_name']; ?></span></p>
                                                <p>Username: <span class="badge bg-secondary"><?php echo $row['user_name']; ?></span></p>
                                                <p>Email: &emsp;&emsp; <span class="badge bg-secondary"><?php echo $row['email']; ?></span></p>
                                                <p>User type: <span class="badge bg-secondary"><?php echo $row['user_type']; ?></span></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a class="btn btn-danger" href="admin_delete.php?id=<?php echo $row['id']; ?>">Delete</i></a> 
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php 
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php 
            // if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
            //     echo"<div class='d-flex justify-content-center'><h1 class='m-5 center'>WELCOME, $_SESSION[username]!</h1></div>";
            // }
        ?>

        <!-- DataTable Plugin Script -->
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>

        <!-- Popup Script -->
        <script src="../popup_script.js"></script>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>