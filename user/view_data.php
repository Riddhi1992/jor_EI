<?php
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>
        <h3 class="text-center m-3">Frequently Asked Questions</h3>

        <!-- DataTable Plugin Script -->
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </body>
</html>

<?php 

    if(isset($_GET['topic']) && $_GET['id']) {
        $topic = $_GET['topic'];
        $id = $_GET['id'];

        $query = "SELECT * FROM `client_data` WHERE `topic` = '$topic'";
        $result = mysqli_query($con, $query);

        if(isset($_GET['visCon'])) {
            $visCon = $_GET['visCon'];
            $sql = "UPDATE `client_data` SET `visitor_counter` = $visCon+1 WHERE id = $id";
            $res = mysqli_query($con, $sql);
        }

        if($result) {
            $row = mysqli_fetch_array($result);

            echo "
                <div class='container'>

                    <h3 class='text-center'>Company Name: $row[company_name]</h3>
                    <h4 class='text-center'>Business: $row[business_type]</h4>
                    <h4 class='text-center'>Topic: $row[topic]</h4>
                </div>
            ";
        }
            
    }

?>