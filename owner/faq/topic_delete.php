<?php
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();
?>

<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM `client_data` WHERE `id`=$id";
        $result = $con->query($query);

        if($result) {
            $query = "DELETE FROM `client_data` WHERE `id`=$id";
            $result = $con->query($query);

            if ($result) {
                echo"
                    <script>
                        alert('Topic is deleted Successfully!');
                        window.location.href = 'nonActiveFetchdata.php';
                    </script>
                ";
            }
        }
    }
?>