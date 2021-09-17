<?php 
    include "../connection.php";
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendMail ($email, $v_code, $password) {
        require ("../PHPMailer/Exception.php");
        require ("../PHPMailer/SMTP.php");
        require ("../PHPMailer/PHPMailer.php");

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'example@gmail.com';                     //SMTP username
            $mail->Password   = 'example!@#';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('example@gmail.com', 'example');
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
                Your temporary Password: $password 
                Click the link below to verify the email address
                <a href='http://localhost:8000/LoginSystem/verify.php?email=$email&v_code=$v_code'>Verify</a>";
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    if(isset($_POST['save'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $useradmin = $_POST['useradmin'];
        $companyname = $_POST['companyname'];
        $selection = $_POST['selection'];
        $v_code = bin2hex(random_bytes(16));

        $query = "INSERT INTO `registered_users`(`first_name`, `last_name`, `company_name`, `user_name`, `email`, `password`, `re_password`, `business_type`, `user_type`, `verification_code`, `is_verified`) VALUES ('$firstname','$lastname','$companyname','$user_name','$email','$password','$repassword','$selection','$useradmin','$v_code','0')";
        
        // $result = $con->query($query);

        $result = mysqli_query($con, $query);
        if($result && sendMail($email, $v_code, $password)) {
            echo"
                <script>
                    alert('Registration Successfully done!');
                    window.location.href = 'owner_view.php';
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