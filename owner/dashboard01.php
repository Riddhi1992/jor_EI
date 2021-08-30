<?php 
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();
    // $result = $con->query($query);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>

    <div class="container m-5 mx-auto">
        <div class="row">
            <div class="col gap-3 m-3">
                <div class="card shadow" style="width: 20rem;">
                    <a href="owner_view.php" class="p-3">
                        <img src="../images/UserDetailPage.png" class="card-img-top shadow" style="height: 200px;" alt="...">
                    </a>    
                    <div class="card-body">
                        <h5 class="card-title text-primary">User Detail Page</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="owner_view.php" class="btn btn-primary">User data</a>
                    </div>
                </div>
            </div>
            <div class="col gap-3 m-3">
                <div class="card shadow" style="width: 20rem;">
                    <a href="./faq/faq.php" class="p-3">
                        <img src="../images/AddNewFaq.png" class="card-img-top shadow" style="height: 200px;" alt="...">
                    </a>    
                    <div class="card-body">
                        <h5 class="card-title text-primary">Add New FAQ set</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="./faq/faq.php" class="btn btn-primary">Add FAQ</a>
                    </div>
                </div>
            </div>
            <div class="col gap-3 m-3">
                <div class="card shadow" style="width: 20rem;">
                    <a href="./faq/fetchdata.php" class="p-3">
                        <img src="../images/faqList.png" class="card-img-top shadow" style="height: 200px;" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">FAQ List</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="./faq/fetchdata.php" class="btn btn-primary">FAQ list view</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    </body>
</html>


