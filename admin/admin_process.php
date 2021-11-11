<?php 
    include "../connection.php";
    session_start();

    if(isset($_POST['save'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $repassword = $_POST['repassword'];
        $useradmin = $_POST['useradmin'];
        $companyname = $_POST['companyname'];
        $selection = $_POST['selection'];
        $selection1 = $_POST['selection1'];
        $v_code = bin2hex(random_bytes(16));

        if($_POST['selection'] == 'Realtor') {
            $query = "INSERT INTO `registered_users`(`first_name`, `last_name`, `company_name`, `user_name`, `email`, `password`, `business_type`, `user_type`, `verification_code`, `is_verified`) VALUES ('$firstname','$lastname','$companyname','$user_name','$email','$password','$selection','$useradmin','$v_code','0')";
        }
        else {
            $query = "INSERT INTO `registered_users`(`first_name`, `last_name`, `company_name`, `user_name`, `email`, `password`, `business_type`, `user_type`, `verification_code`, `is_verified`) VALUES ('$firstname','$lastname','$companyname','$user_name','$email','$password','$selection1','$useradmin','$v_code','0')";
        }

        // $query = "INSERT INTO `registered_users`(`first_name`, `last_name`, `company_name`, `user_name`, `email`, `password`, `business_type`, `user_type`, `verification_code`, `is_verified`) VALUES ('$firstname','$lastname','$companyname','$user_name','$email','$password','$selection','$useradmin','$v_code','0')";
        
        $result = $con->query($query);

        // $result = mysqli_query($con, $query);
        if($result) {
            echo"
                <script>
                    alert('Registration Successfully done!');
                    window.location.href = 'admin_view.php';
                </script>
            ";
        }
        else {
            echo"
                <script>
                    alert('Registration not Successfully done!');
                    // window.location.href = 'admin.php';
                </script>
            ";
        }
        $con->close();

    }

?>