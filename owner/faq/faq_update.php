<?php 
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();

    if(isset($_POST['update']) && $_GET['ques']) {
        $question = $_POST['question'];
        $id = $_POST['id'];
        $name = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];
        $ques = $_GET['ques'];

        move_uploaded_file($tmp, "../videos/".$name);

        $query = "SELECT * FROM `client_data` WHERE `id`='$id'";
        $result = mysqli_query($con, $query);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $ques1 = $row['ques1'];
                $ques2 = $row['ques2'];
                $ques3 = $row['ques3'];
                $ques4 = $row['ques4'];
                $ques5 = $row['ques5'];
                $ques6 = $row['ques6'];
                $ques7 = $row['ques7'];
                $ques8 = $row['ques8'];
                $ques9 = $row['ques9'];
                $ques10 = $row['ques10'];
                $ques11 = $row['ques11'];
                $ques11 = $row['ques12'];
                $ques11 = $row['ques13'];
                $ques11 = $row['ques14'];
                $ques11 = $row['ques15'];
                $ques11 = $row['ques16'];
                $ques11 = $row['ques17'];
                $ques11 = $row['ques18'];
                $ques11 = $row['ques19'];
                $ques11 = $row['ques20'];

                // for ($i=1; $i <=20; $i++) {
                //     if($ques == $ques[$i]) {
                //         $query1 = "UPDATE `client_data` SET `ques[$i]`='$question',`ans[$i]`='$name' WHERE `id`='$id'";
                //         $result1 = mysqli_query($con, $query1);
        
                //         if ($result1) {
                //             echo "
                //                 <script>
                //                     alert('First question updated');
                //                     window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                //                 </script>
                //             ";
                //         }
                //     }
                // }

                if($ques == $ques1) {
                    $query1 = "UPDATE `client_data` SET `ques1`='$question',`ans1`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('First question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques2) {
                    $query1 = "UPDATE `client_data` SET `ques2`='$question',`ans2`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Second question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques3) {
                    $query1 = "UPDATE `client_data` SET `ques3`='$question',`ans3`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Third question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques4) {
                    $query1 = "UPDATE `client_data` SET `ques4`='$question',`ans4`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Fourth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques5) {
                    $query1 = "UPDATE `client_data` SET `ques5`='$question',`ans5`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Fifth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques6) {
                    $query1 = "UPDATE `client_data` SET `ques6`='$question',`ans6`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Sixth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques7) {
                    $query1 = "UPDATE `client_data` SET `ques7`='$question',`ans7`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Seventh question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques8) {
                    $query1 = "UPDATE `client_data` SET `ques8`='$question',`ans8`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Eight question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques9) {
                    $query1 = "UPDATE `client_data` SET `ques9`='$question',`ans9`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Ninth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques10) {
                    $query1 = "UPDATE `client_data` SET `ques10`='$question',`ans10`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Tenth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques11) {
                    $query1 = "UPDATE `client_data` SET `ques11`='$question',`ans11`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Eleventh question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques12) {
                    $query1 = "UPDATE `client_data` SET `ques12`='$question',`ans12`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Twelfth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques13) {
                    $query1 = "UPDATE `client_data` SET `ques13`='$question',`ans13`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Thirteenth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques14) {
                    $query1 = "UPDATE `client_data` SET `ques14`='$question',`ans14`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Fourteenth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques15) {
                    $query1 = "UPDATE `client_data` SET `ques15`='$question',`ans15`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Fifteenth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques16) {
                    $query1 = "UPDATE `client_data` SET `ques16`='$question',`ans16`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Sixteenth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques17) {
                    $query1 = "UPDATE `client_data` SET `ques17`='$question',`ans17`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Seventeenth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques18) {
                    $query1 = "UPDATE `client_data` SET `ques18`='$question',`ans18`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Eighteenth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques19) {
                    $query1 = "UPDATE `client_data` SET `ques19`='$question',`ans19`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Nineteenth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }
                else if($ques == $ques20) {
                    $query1 = "UPDATE `client_data` SET `ques20`='$question',`ans20`='$name' WHERE `id`='$id'";
                    $result1 = mysqli_query($con, $query1);
    
                    if ($result1) {
                        echo "
                            <script>
                                alert('Twentieth question updated');
                                window.location.href = 'view_data.php?id=$row[id]&topic=$row[topic]';
                            </script>
                        ";
                    }
                }

            }

            // echo "
            //     <script>
            //         alert($row[ques1]);
            //     </script>
            // ";

            // $row = mysqli_fetch_array($result);
            


            // $ques2 = $row['ques2'];
            
            
        }

        // $query = "UPDATE `owner_datas` SET `question`='$question',`video`='$name', `date_updated`=NOW() WHERE `id`='$id'";

    }

    if(isset($_GET['id']) && ($_GET['ques']) && ($_GET['ans']) && ($_GET['topic'])) {
        $user_id = $_GET['id'];
        $topic = $_GET['topic'];
        $ques = $_GET['ques'];
        $ans = $_GET['ans'];

        $query = "SELECT * FROM `client_data` WHERE `id`='$user_id'";

        $result = $con->query($query);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $user_id = $row['id'];
            }
        ?>

        <!DOCTYPE html>
        <html lang="en">
            <?php include "./includes/header.php" ?>

            <body>
                <?php include "./includes/navbar.php" ?>
                <div class="mt-5"></div>
                <div class="container border rounded shadow">
                    <h2 class="text-center mt-5">FAQ Update Form</h2>
                    <div class='p-4'>
                        <form method='POST' action='' enctype='multipart/form-data'>
                            <div class="form-floating mb-3">
                                <input type="hidden" class="form-control" id="floatingInput10" placeholder="First Name" name="id" value="<?php echo $user_id; ?>" required>
                                <label for="floatingInput10">ID</label>
                            </div>
                            <div class='form-floating mb-3'>
                                <input type='text' class='form-control' id='floatingInput0' placeholder='Question' name='question' value='<?php echo $ques; ?>' required>
                                <label for='floatingInput0'>Question</label>
                            </div>
                            <div class='mb-3'>
                                <label for='formFile' class='form-label' >Upload your Video here</label>
                                <input class='form-control' type='file' id='formFile' name='file' value='<?php echo $ans; ?>' required>
                            </div>

                            <!-- <button class="btn btn-info">Login</button> -->
                            <div class="mt-5">
                                <button class="btn btn-primary" name="update">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
                <script src="./popup_script.js"></script>
            </body>
        </html>

        <?php 
        } 
        else {

        }
    }

?>