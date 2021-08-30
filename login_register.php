<?php 

    require('connection.php');
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendMail ($email, $v_code) {
        require ("PHPMailer/Exception.php");
        require ("PHPMailer/SMTP.php");
        require ("PHPMailer/PHPMailer.php");

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'example@gmail.com';                     //SMTP username
            $mail->Password   = 'example';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('example@gmail.com', 'Example');
            $mail->addAddress($email);               //Name is optional

            // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Email verification from DrHologram';
            $mail->Body    = "Thanks for registration!
                Click the link below to verify the email address
                <a href='http://localhost:8000/LoginSystem/verify.php?email=$email&v_code=$v_code'>Verify</a>";
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    // for login
    if(isset($_POST['login'])) {
        $email = mysqli_real_escape_string($con, $_POST['email_username']);
        // $query = "SELECT * FROM `registered_users` WHERE `email`='$_POST[email_username]' OR `user_name`='$_POST[email_username]'";
        $query = "SELECT * FROM `registered_users` WHERE `email`='$email' OR `user_name`='$_POST[email_username]'";
        $result = mysqli_query($con, $query);

        if($result) {
            if(mysqli_num_rows($result)==1) {
                $result_fetch=mysqli_fetch_assoc($result);

                if($result_fetch['is_verified']==1) {
                    if($result_fetch['status']==1) {
                        if(password_verify($_POST['password'], $result_fetch['password'])) {
                            // if password matched
                            $_SESSION['logged_in']=true;
                            $_SESSION['username']=$result_fetch['user_name'];
                            if($result_fetch['user_type']=="User") {
                                header("location: user.php");
                            }
                            else if ($result_fetch['user_type']=="Owner") {
                                // Online Offline
                                $_SESSION['UID'] = $result_fetch['id'];
                                header("location: ./owner/dashboard01.php");
                            }
                            else if ($result_fetch['user_type']=="Admin") {
                                $_SESSION['UID'] = $result_fetch['id'];
                                header("location: ./admin/admin_view.php");
                                die();
                            }
                            else {
                                header("location: index.php");
                            }
    
                        }
                        else {
                            // if password not matched
                            echo"
                                <script>
                                    alert('Incorrect Password');
                                    window.location.href = 'index.php';
                                </script>
                            ";
                        }
                    }
                    else {
                        echo"
                            <script>
                                alert('Please contact the admin to activate your account!');
                                window.location.href = 'index.php';
                            </script>
                        ";   
                    }
                }
                
            }
            else {
                echo"
                    <script>
                        alert('Email not verified.');
                        window.location.href = 'index.php';
                    </script>
                ";    
            }
        }
        else {    
            echo"
                <script>
                    alert('Cannot Run Query');
                    window.location.href = 'index.php';
                </script>
            ";
        }
        
    }

    // for registration    
    if(isset($_POST['register'])) {
        $user_exist_query = "SELECT * FROM `registered_users` WHERE `user_name`='$_POST[user_name]' OR `email`='$_POST[email]' ";
        $result = mysqli_query($con, $user_exist_query);

        if($result) {
            // if any user already exist
            if(mysqli_num_rows($result) > 0) {
                $result_fetch = mysqli_fetch_assoc($result);
                // if username already taken
                if($result_fetch['user_name'] == $_POST['user_name']) {
                    echo"
                        <script>
                            alert('$result_fetch[user_name] - username already taken!');
                            window.location.href = 'index.php';
                        </script>
                    ";        
                }
                // if email already taken
                else {
                    echo"
                        <script>
                            alert('$result_fetch[email] - E-mail already taken!');
                            window.location.href = 'index.php';
                        </script>
                    ";
                }
            }
            else {
                // No one has taken username or email
                $password=password_hash($_POST['password'], PASSWORD_BCRYPT);
                $repassword=password_hash($_POST['repassword'], PASSWORD_BCRYPT);
                $reset_token = bin2hex(random_bytes(16));
                date_default_timezone_set('America/Los_Angeles');
                $date = date("Y-m-d");
                $v_code = bin2hex(random_bytes(16));

                $query = "INSERT INTO `registered_users`(`first_name`, `last_name`, `company_name`, `user_name`, `email`, `password`, `re_password`, `business_type`, `user_type`, `verification_code`, `is_verified`, `status`, `resettoken`, `resettokenexpire`) 
                VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[companyname]','$_POST[user_name]','$_POST[email]','$password','$repassword','$_POST[selection]','$_POST[useradmin]','$v_code', '0', '1', NULL, NULL)";

                // $query = "INSERT INTO `registered_users`(`first_name`, `last_name`, `company_name`, `user_name`, `email`, `password`, `re_password`, `business_type`, `user_type`, `verification_code`, `is_verified`) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[companyname]','$_POST[user_name]','$_POST[email]','$password','$repassword','$_POST[selection]','$_POST[useradmin]','$v_code','0')";
                // $query = "INSERT INTO `registered_users`(`first_name`, `last_name`, `company_name`, `user_name`, `email`, `password`, `re_password`, `business_type`, `user_type`, `verification_code`, `is_verified`) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[companyname]','$_POST[user_name]','$_POST[email]','$_POST[password]','$_POST[repassword]','$_POST[selection]','$_POST[useradmin]','$v_code','0')";
                if(mysqli_query($con, $query) && sendMail($_POST['email'], $v_code)) {
                    // if data inserted successfully
                    echo"
                        <script>
                            alert('Registration Successfully done!');
                            window.location.href = 'index.php';
                        </script>
                    ";
                }
                else {
                    // if data cannot be inserted
                    echo"
                        <script>
                            alert('Server 1 Down');
                            window.location.href = 'index.php';
                        </script>
                    ";        
                }
            }
        }
        else {
            echo"
                <script> 
                    alert('Server Down');
                    window.location.href = 'index.php';
                </script>
            ";
        }
    }

?>

<?php 
    session_start();
    $email = mysqli_real_escape_string($con, $_POST['email_username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "SELECT * FROM `registered_users` WHERE `email`='$email' AND `password`='$password'";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['status']==1) {
            $_SESSION['IS_LOGIN'] = 'yes';
            $arr = array('status'=>'success');
        }
        else {
            $arr = array('status'=>'wait', 'id'=>$row['id']);            
        }
    }
    else {
        $arr = array('status'=>'error', 'msg'=>'Please enter valid login details');        
    }
    echo json_encode($arr);
?>