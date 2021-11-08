<?php 
    include "../../connection.php"; 
    session_start();
?>

<?php 
    if(isset($_GET['id']) && $_GET['address']) {
        $sql = "SELECT `id`, `first_name`, `last_name`, `email`, `company_name`, `user_name` FROM `registered_users` WHERE `user_name`='$_SESSION[username]' ";
        $res = mysqli_query($con, $sql);
        $row_data = mysqli_fetch_array($res);

        $first_name = $row_data['first_name'];
        $last_name = $row_data['last_name'];
        $email = $row_data['email'];
        $id = $_GET['id'];
        $address = $_GET['address'];

        if($res && sendMail($first_name, $last_name, $email, $address, $con)) {
            // echo "
                // <script>
                //     alert('Email sent');
                // </script>
            // ";  
        }
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendMail($first_name, $last_name, $email, $address, $con) {
        require("../../PHPMailer/Exception.php");
        require("../../PHPMailer/SMTP.php");
        require("../../PHPMailer/PHPMailer.php");
        
        // require ("/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/PHPMailer/SMTP.php");
        // require ("/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/PHPMailer/PHPMailer.php");

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        $html = "
            <p>Hello $first_name $last_name,</p><br>
            
            <p>Here is the link for this $address</p><br>
            
            <p>Thank you</p>
        ";

        $html_sub = "
            Your programs publishing link for $address.
        ";

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
            $mail->setFrom('example@gmail.com', 'Example');
            // $mail->addAddress($email);               //Name is optional

            $mail->addAddress($email);     //Add a recipient
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $html_sub;
            $mail->Body    = $html;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            if($mail->send()) {
                $query = "SELECT * FROM `registered_users` WHERE `user_name` = '$_SESSION[username]'";
                $result = mysqli_query($con, $query);
                $row_data = mysqli_fetch_array($result);

                if($row_data['user_type'] == 'Admin') {
                    echo "
                        <script>
                            alert('Email sent!');
                            window.location.href = '../../admin/activeFetchdata.php';
                        </script>
                    ";    
                }
                else {
                    echo "
                        <script>
                            alert('Email sent!');
                            window.location.href = 'activeFetchdata.php';
                        </script>
                    ";
                }
            } else {
                echo "
                    <script>
                        alert('Error');
                    </script>
                ";
            }
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
?>