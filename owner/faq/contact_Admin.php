<?php 
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    // $con = mysqli_connect("localhost", "root", "", "registered_user");

    // if(mysqli_connect_error()) {
    //     echo"<script>alert('Cannot connect to database');</script>";
    //     exit();
    // }

    session_start();
    // $result = $con->query($query);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>

        <div class="container mb-5 d-flex justify-content-center">
            <div class="shadow mt-5 p-5 w-50">
                <h3 class="text-center mb-5">Contact Admin</h3>
                <form class="" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" placeholder="name" name="name" required>
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="emailSubject" placeholder="name@example.com" name="emailSubject" required>
                        <label for="emailSubject">Subject Line</label>
                    </div>
                    <div class='mb-3'>
                        <label for='file' class='form-label'>Attachments <i class="fas fa-paperclip"></i></label>
                        <input class='form-control' type='file' id='file' name='file[]' multiple>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="emailBody" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Email Body</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-50" name="send">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

<?php 
    if(isset($_POST['send'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $emailSubject = mysqli_real_escape_string($con, $_POST['emailSubject']);
        $emailBody = mysqli_real_escape_string($con, $_POST['emailBody']);

        $name1 = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];

        $query = "INSERT INTO `contact_us`(`name`, `email`, `emailSubject`, `emailBody`) VALUES ('$name','$email','$emailSubject','$emailBody')";
        $result = mysqli_query($con, $query);

        if ($result && sendMail($name, $email, $emailSubject, $emailBody, $name1, $tmp)) {
            echo "
                <script>
                    // alert('Data inserted successfully!');
                </script>
            ";
        }

    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendMail($name, $email, $emailSubject, $emailBody, $name1, $tmp) {
        require ("/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/PHPMailer/Exception.php");
        require ("/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/PHPMailer/SMTP.php");
        require ("/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/PHPMailer/PHPMailer.php");

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        $html = "
            <p>Hello $name,</p>
            
            <p>$emailBody</p>

            <p>Thank you</p>
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
            $mail->setFrom('example@gmail.com', 'example');
            $mail->addAddress($email);               //Name is optional

            $mail->addAddress($email, $name);     //Add a recipient
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            

            // $mail->addAttachment($name1);         //Add attachments

            foreach ($name1 as $key => $value) {
                $mail->addAttachment($tmp[$key], $name1[$key]);
            }
            
            // $mail->addAttachment($tmp, $name1);    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            // $mail->Subject = 'Email verification from DrHologram';
            $mail->Subject = $emailSubject;
            // $mail->Body    = "Thanks for registration!
            //     Click the link below to verify the email address
            //     <a href='http://localhost:8000/LoginSystem/verify.php?email=$email&v_code=$v_code'>Verify</a>";
            $mail->Body    = $html;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            if($mail->send()) {
                echo "
                    <script>
                        alert('Email sent!');
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

    
?>

