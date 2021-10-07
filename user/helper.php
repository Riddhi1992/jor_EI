<?php 
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();

    $val = $_GET['value'];
    $val_M = mysqli_real_escape_string($con, $val);

    $sql = "SELECT `company_name`, `topic` FROM `client_data` WHERE `company_name`='$val_M'";
    $result = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result)>0) {
        echo"<select>";
        
        while($rows = mysqli_fetch_assoc($result)) {
            echo "<option>".$rows["topic"]."</option>";
        }
        echo "
            </select>
        ";
    }

?>