<?php
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>
        
    </body>


</html>

<?php 
    if (isset($_POST['add'])) {
        $query = "SELECT * FROM `client_data` WHERE `id`='$id'";
        $result = mysqli_query($con, $query);
        echo"
                        <script>
                            alert('Add button clicked');
                            // window.location.href = 'faq04.php';
                        </script>
                    ";

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

                echo"
                        <script>
                            alert('Result is being fetched');
                            // window.location.href = 'faq04.php';
                        </script>
                    ";
                $ques1 = $row['ques1'];
                $ques2 = $row['ques2'];
                $ques3 = $row['ques3'];
                $ques4 = $row['ques4'];
                $ques5 = $row['ques5'];
                $ques6 = $row['ques6'];
                $ques7 = $row['ques7'];
                $ques8 = $row['ques8'];
                $ques9 = $row['ques9'];
                $ques10 = $row['ques10'];
                $ques11 = $row['ques11'];

                if(is_null($ques4)) {
                    echo"
                        <script>
                            alert('Fourth Question!');
                            window.location.href = 'faq04.php';
                        </script>
                    ";
                }

            }
        }
    }
?>