<?php
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>

    <h3 class="text-center m-3">Frequently Asked Questions List</h3>
        <p id="messagedisplay" class="mt-5"></p>
        <div id="displaydata"></div>

        <!-- DataTable Plugin Script -->
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </body>
</html>

<?php 
    // include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    // session_start();
    // $result = $con->query($query);

    $query = "SELECT * FROM `owner_datas`";

    $query_run = mysqli_query($con, $query);

    echo "
        <div class='container'>
        <div class='table-responsive mb-5'>
            <table id='example' class='table table-striped table-hover shadow-lg mt-3 mb-3'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Question</th>
                        <th>File Name</th>
                        <th>Video</th>
                        <th>Added Originally</th>
                        <th>Last Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>";

    if($query_run) {
        $j = 1;
        while($row = mysqli_fetch_array($query_run)) {
            $id = $row['id'];
            $video = $row['video'];
            echo "
                <tr>
                    <td>$j</td>
                    <td>$row[question]</td>
                    <td>$row[video]</td>
                    <td><a href='watch.php?id=$id'>".$video."</a></td>
                    <td>$row[date_inserted]</td>
                    <td>$row[date_updated]</td>
                    <td><a class='btn btn-info mb-1' href='faq_update.php?id=$row[id]'><i class='fa fa-pencil' aria-hidden='true'></i></a></td>
                </tr>                
            ";
            $j++;
        }
    }
    else {
        echo"
            <script>
                alert('No record found!');
                window.location.href = 'faq.php';
            </script>
        ";
    }

    echo "
                    </tbody>
                </table>
            </div>
        </div>
    ";

?>

<?php 
    if(isset($_POST['contact_admin'])) {
        echo "
            <script>
                alert('Contact Admin');
            </script>
        ";

    }

?>

