    <body>
        <div class="d-flex justify-content-center">
            <h2 class="">DrHologram</h2>
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
                            <li class="nav-item">
                                <a class="nav-link" href="owner_view.php">User Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./faq/faq.php">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./faq/fetchdata.php">FAQ View</a>
                            </li>
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