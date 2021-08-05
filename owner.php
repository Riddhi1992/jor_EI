<?php 
    require('connection.php');
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
                            WELCOME, $_SESSION[username]! - <a class='btn btn-danger' href='logout.php' role='button'>LOGOUT</a>
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
            <h1 class="text-center m-5">Owner Page</h1>
            <form method="POST" action="">
                <div class="card p-3 mb-2 shadow">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput0" placeholder="Question01" name="ques_01">
                        <label for="floatingInput0">Question 01</label>
                    </div>
                
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput1" placeholder="Answer01" name="ans_01">
                        <label for="floatingInput1">Answer 01</label>
                    </div>
                </div>
                <div class="card p-3 mb-2 shadow">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput2" placeholder="Question02" name="ques_02">
                        <label for="floatingInput2">Question 02</label>
                    </div>
                
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput3" placeholder="Answer02" name="ans_02">
                        <label for="floatingInput3">Answer 02</label>
                    </div>
                </div>
                <div class="card p-3 mb-2 shadow">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput4" placeholder="Question03" name="ques_03">
                        <label for="floatingInput4">Question 03</label>
                    </div>
                
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput5" placeholder="Answer03" name="ans_03">
                        <label for="floatingInput5">Answer 03</label>
                    </div>
                </div>
                <div class="card p-3 mb-2 shadow">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput6" placeholder="Question04" name="ques_04">
                        <label for="floatingInput6">Question 04</label>
                    </div>
                
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput7" placeholder="Answer04" name="ans_04">
                        <label for="floatingInput7">Answer 04</label>
                    </div>
                </div>
                <div class="card p-3 mb-2 shadow">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput8" placeholder="Question05" name="ques_05">
                        <label for="floatingInput8">Question 05</label>
                    </div>
                
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput9" placeholder="Answer05" name="ans_05">
                        <label for="floatingInput9">Answer 05</label>
                    </div>
                </div>
                
                <!-- <button class="btn btn-info">Login</button> -->
                <div class="modal-footer">
                    <button class="btn btn-info" data-bs-target="" data-bs-toggle="modal" data-bs-dismiss="modal" name="submit">Submit</button>
                </div>
            </form>
        </div>

        <?php 
            // if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
            //     echo"<div class='d-flex justify-content-center'><h1 class='m-5 center'>WELCOME, $_SESSION[username]!</h1></div>";
            // }
        ?>

        <!-- Popup Script -->
        <!-- <script src="popup_script.js"></script> -->

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>