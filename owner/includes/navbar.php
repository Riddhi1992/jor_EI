    <body>
        <div class="d-flex justify-content-center">
            <h2 class="m-4">Dr. Hologram</h2>
        </div>
        <!-- Header start -->
        <header class="container">    
            <!-- Nav start -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="dashboard01.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Programs
                                </a>
                                <!-- <a class="nav-link dropdown-toggle" href="../owner_view.php"></a> -->
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="./faq/faq.php">Start a Program</a></li>
                                    <li><a class="dropdown-item" href="./faq/activeFetchdata.php">Active Programs</a></li>
                                    <li><a class="dropdown-item" href="./faq/nonActiveFetchdata.php">Archived Programs</a></li>
                                </ul>
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
                            WELCOME, $_SESSION[username]! - <a class='btn btn-danger' href='/LoginSystem/logout.php' role='button'>LOGOUT</a>
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