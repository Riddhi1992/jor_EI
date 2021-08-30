<?php 
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * from `owner_datas` WHERE id=$id";
        $res = mysqli_query($con, $sql);

        $row = mysqli_fetch_assoc($res);

        $question = $row['question'];
        $video = $row['video'];

        ?>  
        
        <?php include "./includes/header.php" ?>

        <?php include "./includes/navbar.php" ?>

        <h3 class="text-center mt-5">FAQ: <?php echo $question; ?></h3>
        <h4 class="text-center">You are watching <?php echo $video; ?></h4>
        <div class="d-flex justify-content-center m-5">
            <video width="615" height="315" class="shadow-lg rounded" controls>
                <source src="../videos/<?php echo $video; ?>" type="video">
            </video>
        </div>

<?php
    }

?>