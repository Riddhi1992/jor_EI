<?php 
    include "../../connection.php"; 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>

    <?php include "./includes/footer.php" ?>
</body>
    
</html>

<?php

    $sql = "SELECT * FROM `registered_users` WHERE `user_name` = '$_SESSION[username]'";
    $res = mysqli_query($con, $sql);
    $row_data = mysqli_fetch_array($res);
    $email = $row_data['email'];
    $firstname = $row_data['first_name'];

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function autoReplyMail($email, $firstname) {
        require ("/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/PHPMailer/Exception.php");
        require ("/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/PHPMailer/SMTP.php");
        require ("/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/PHPMailer/PHPMailer.php");

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        $autoHtml = "
            <p>Hello $firstname,</p><br>&nbsp;
            
            <p>We received your concern Email and we are reviewing it.</p>
            <p>Please give us some time to reply you back with the possible solutions. It might take 1-2 business days to reply back.</p>

            <p>This is an automatic email.</p><br>&nbsp;

            <p>Thank you</p>
        ";

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'p3plzcpnl447271.prod.phx3.secureserver.net';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'example@realtor.drhologramsimulation.com';                     //SMTP username
            $mail->Password   = 'Example';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('example@realtor.drhologramsimulation.com', 'Dr. Hologram');

            $mail->addAddress($email, $firstname);     //Add a recipient
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            // $mail->Subject = 'Email verification from DrHologram';
            $mail->Subject = 'This is an automatic reply to your email';
            $mail->Body    = $autoHtml;
        
            if($mail->send()) {
                echo "
                    <script>
                        alert('Email sent!');
                    </script>
                ";
                echo "
                    <script>
                        window.location.href = 'contact_Admin.php';
                    </script>
                ";
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

    autoReplyMail($email, $firstname);
    
?>

