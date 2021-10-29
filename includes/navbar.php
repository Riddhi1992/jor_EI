<?php 
    include "./connection.php";
    include "styles.php";
?>

        <div id='mainHeader' class="container-fluid">
        <!-- <div class="d-flex justify-content-center" > -->
            <div class="row align-items-center">
                <img id="bgImage" class="container-fluid" src="./images/Layer 644.png">
                <div class="col" id="headerImage">
                    <a href="index.php"><img class="mt-3 mb-3" src="./images/logo-tagline.png"></a>
                </div>
                <div class="col" id="headerDesc">
                    <p class="pt-4">
                        Disrupting Simulation and Telemedicine with Holographic & AI Sciences For Improved Healthcare Outcomes
                    </p>
                </div>
                <div class="col pt-4" id="headerBtn">
                    <button class="">REQUEST A DEMO</button>
                    <p class="pt-3">Call (844) 516-4227</p>
                </div>
            </div>
            <!-- <img class="ms-5 mt-3 mb-3" src="../images/logo-tagline.png"> -->
            <!-- <h2 class="m-4">Dr. Hologram</h2> -->
        <!-- </div> -->
        </div>
        <div class="container-fluid d-flex justify-content-center" id="header_bg">
            <p id="headerDesc02">
                Disrupting Simulation and Telemedicine with Holographic & AI Sciences For Improved Healthcare Outcomes
            </p>
        </div>
        <!-- Header start -->
        <header class="container-fluid">    
            <!-- Nav start -->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button id='burgerLine' class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="index.php"><span>Home <i class="fas fa-home"></i></span></a>
                            </li>
                            <li class="nav-item navHide">
                                <!-- <a class="nav-link" href="#">Home</a> -->
                                <a class='nav-link text-white ' data-bs-toggle='modal' href='#exampleModalToggle'>Login</a>
                            </li>
                            <li class="nav-item navHide">
                                <!-- <a class="nav-link" href="#">Home</a> -->
                                <a class='nav-link text-white' href='register.php'>Register</a>
                            </li>
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
                            $_SESSION[username] - <a class='btn' href='logout.php' id='logoutBtn' role='button'>LOGOUT</a>
                        </div>
                    ";
                }
                else {
                    echo"
                    <!-- login button start -->
                    <div class='sign-in-up' id='headerBtn'>
                        <!-- <button type='button' class='btn btn-secondary'>LOGIN</button> -->
                        <a class='text-white text-decoration-none' data-bs-toggle='modal' href='#exampleModalToggle'><button class='btn'>LOGIN</button></a>
                        <a class='text-white text-decoration-none' href='register.php'><button class='btn'>REGISTER</button></a>
                    </div>
                    <!-- login button end -->
                    ";
                }
            ?>
        </header>