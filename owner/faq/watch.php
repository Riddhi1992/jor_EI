<?php 
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./includes/header.php" ?>
</head>
<body>
    <?php include "./includes/navbar.php" ?>
</body>
</html>

<?php

    if(isset($_GET['id']) && $_GET['topic'] && $_GET['ques'] && $_GET['ans']) {
        $id = $_GET['id'];
        $topic = $_GET['topic'];
        $ques = $_GET['ques'];
        $ans = $_GET['ans'];

        $query = "SELECT * FROM `client_data` WHERE `id`='$id'";
        $result = $con->query($query);
        $row = mysqli_fetch_array($result);


        $ques1 = $row['ques1'];
        $ans1 = $row['ans1'];
        $ques2 = $row['ques2'];
        $ans2 = $row['ans2'];
        $ques3 = $row['ques3'];
        $ans3 = $row['ans3'];
        $ques4 = $row['ques4'];
        $ans4 = $row['ans4'];
        $ques5 = $row['ques5'];
        $ans5 = $row['ans5'];
        $ques6 = $row['ques6'];
        $ans6 = $row['ans6'];
        $ques7 = $row['ques7'];
        $ans7 = $row['ans7'];
        $ques8 = $row['ques8'];
        $ans8 = $row['ans8'];
        $ques9 = $row['ques9'];
        $ans9 = $row['ans9'];
        $ques10 = $row['ques10'];
        $ans10 = $row['ans10'];
        $ques11 = $row['ques11'];
        $ans11 = $row['ans11'];
        $ques12 = $row['ques12'];
        $ans12 = $row['ans12'];
        $ques13 = $row['ques13'];
        $ans13 = $row['ans13'];
        $ques14 = $row['ques14'];
        $ans14 = $row['ans14'];
        $ques15 = $row['ques15'];
        $ans15 = $row['ans15'];
        $ques16 = $row['ques16'];
        $ans16 = $row['ans16'];
        $ques17 = $row['ques17'];
        $ans17 = $row['ans17'];
        $ques18 = $row['ques18'];
        $ans18 = $row['ans18'];
        $ques19 = $row['ques19'];
        $ans19 = $row['ans19'];
        $ques20 = $row['ques20'];
        $ans20 = $row['ans20'];
        

        if ($row['ques1'] == $ques && $row['topic'] == $topic && $row['ans1'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques1</h3>
                <h4 class='text-center'>You are watching $ans1</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans1' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques2'] == $ques && $row['topic'] == $topic && $row['ans2'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques2</h3>
                <h4 class='text-center'>You are watching $ans2</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans2' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques3'] == $ques && $row['topic'] == $topic && $row['ans3'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques3</h3>
                <h4 class='text-center'>You are watching $ans3</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans3' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques4'] == $ques && $row['topic'] == $topic && $row['ans4'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques4</h3>
                <h4 class='text-center'>You are watching $ans4</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans4' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques5'] == $ques && $row['topic'] == $topic && $row['ans5'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques5</h3>
                <h4 class='text-center'>You are watching $ans5</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans5' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques6'] == $ques && $row['topic'] == $topic && $row['ans6'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques6</h3>
                <h4 class='text-center'>You are watching $ans6</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans6' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques7'] == $ques && $row['topic'] == $topic && $row['ans7'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques7</h3>
                <h4 class='text-center'>You are watching $ans7</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans7' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques8'] == $ques && $row['topic'] == $topic && $row['ans8'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques8</h3>
                <h4 class='text-center'>You are watching $ans8</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans8' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques9'] == $ques && $row['topic'] == $topic && $row['ans9'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques9</h3>
                <h4 class='text-center'>You are watching $ans9</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans9' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques10'] == $ques && $row['topic'] == $topic && $row['ans10'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques10</h3>
                <h4 class='text-center'>You are watching $ans10</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans10' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques11'] == $ques && $row['topic'] == $topic && $row['ans11'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques11</h3>
                <h4 class='text-center'>You are watching $ans11</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans11' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques12'] == $ques && $row['topic'] == $topic && $row['ans12'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques12</h3>
                <h4 class='text-center'>You are watching $ans12</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans12' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques13'] == $ques && $row['topic'] == $topic && $row['ans13'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques13</h3>
                <h4 class='text-center'>You are watching $ans13</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans13' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques14'] == $ques && $row['topic'] == $topic && $row['ans14'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques14</h3>
                <h4 class='text-center'>You are watching $ans14</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans14' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques15'] == $ques && $row['topic'] == $topic && $row['ans15'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques15</h3>
                <h4 class='text-center'>You are watching $ans15</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans15' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques16'] == $ques && $row['topic'] == $topic && $row['ans16'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques16</h3>
                <h4 class='text-center'>You are watching $ans16</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans16' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques17'] == $ques && $row['topic'] == $topic && $row['ans17'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques17</h3>
                <h4 class='text-center'>You are watching $ans17</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans17' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques18'] == $ques && $row['topic'] == $topic && $row['ans18'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques18</h3>
                <h4 class='text-center'>You are watching $ans18</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans18' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques19'] == $ques && $row['topic'] == $topic && $row['ans19'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques19</h3>
                <h4 class='text-center'>You are watching $ans19</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans19' type='video'>
                    </video>
                </div>
            ";        
        }
        else if ($row['ques20'] == $ques && $row['topic'] == $topic && $row['ans20'] == $ans) {    
            echo"
                <h3 class='text-center mt-5'>FAQ: $ques20</h3>
                <h4 class='text-center'>You are watching $ans20</h4>
                <div class='d-flex justify-content-center m-5'>
                    <video width='615' height='315' class='shadow-lg rounded' controls>
                        <source src='../videos/$ans20' type='video'>
                    </video>
                </div>
            ";        
        }

        ?>
        

<?php
    }

?>