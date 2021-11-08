<?php 
    include "../connection.php";
    include "../includes/styles.php";
?>
    <body>
        <div id='mainHeader' class="container-fluid">
        <!-- <div class="d-flex justify-content-center" > -->
            <div class="row align-items-center">
                <img id="bgImage" class="container-fluid" src="../images/Layer 644.png">
                <div class="col" id="headerImage">
                    <a href="dashboard02.php"><img class="mt-3 mb-3" src="../images/logo-tagline.png"></a>
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
                <div class="container-fluid" >
                    <a class="navbar-brand" href="#"></a>
                    <button id='burgerLine' class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="dashboard02.php"><span>Home <i class="fas fa-home"></i></span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>Programs <i class="fas fa-folder-plus"></i></span>
                                </a>
                                <!-- <a class="nav-link dropdown-toggle" href="../owner_view.php"></a> -->
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item text-white" href="../owner/faq/faq.php"><span>Start a Program</span></a></li>
                                    <li><a class="dropdown-item text-white" href="activeFetchdata.php"><span>Active Programs</span></a></li>
                                    <li><a class="dropdown-item text-white" href="nonActiveFetchdata.php"><span>Archived Programs</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="profile.php"><span>Profile <i class="fas fa-user"></i></span></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="./faq/faq.php">Start a Program</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Nav end -->

            <?php 
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
                    echo"
                        <div>
                            <span>WELCOME, $_SESSION[username]!</span> - <a id='logoutBtn' class='btn text-white' id='logoutBtn' href='../logout.php' role='button'>LOGOUT</a>
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

        <script type="text/javascript">
            $("a").click(function () {
                $("a").css("background-color", "");
                $(this).css("background-color", "#219898");
                $(this).css("color", "#000000");
            });
        </script>