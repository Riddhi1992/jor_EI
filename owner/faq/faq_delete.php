<?php 
    include "../../connection.php"; 
    session_start();
?>

<?php
    if(isset($_GET['id']) && $_GET['address'] && $_GET['ques']) {
        $id = $_GET['id'];
        $address = $_GET['address'];
        $ques = $_GET['ques'];

        $query = "SELECT * FROM `client_data` WHERE `id`='$id'";
        $result = $con->query($query);
        $row = mysqli_fetch_array($result);
        $visCon = $row['visitor_counter'];
        $option = $row['buy_lease'];

        if ($row['ques1'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques1`= NULL, `ans1`= NULL, `date1`=NULL WHERE `ques1`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques2'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques2`= NULL, `ans2`= NULL, `date2`=NULL WHERE `ques2`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques3'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques3`= NULL, `ans3`= NULL, `date3`=NULL WHERE `ques3`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques4'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques4`= NULL, `ans4`= NULL, `date4`=NULL WHERE `ques4`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques5'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques5`= NULL, `ans5`= NULL, `date5`=NULL WHERE `ques5`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques6'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques6`= NULL, `ans6`= NULL, `date6`=NULL WHERE `ques6`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques7'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques7`= NULL, `ans7`= NULL, `date7`=NULL WHERE `ques7`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques8'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques8`= NULL, `ans8`= NULL, `date8`=NULL WHERE `ques8`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques9'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques9`= NULL, `ans9`= NULL, `date9`=NULL WHERE `ques9`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques10'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques10`= NULL, `ans10`= NULL, `date10`=NULL WHERE `ques10`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        if ($row['ques11'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques11`= NULL, `ans11`= NULL, `date11`=NULL WHERE `ques11`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques12'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques12`= NULL, `ans12`= NULL, `date12`=NULL WHERE `ques12`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques13'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques13`= NULL, `ans13`= NULL, `date13`=NULL WHERE `ques13`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques14'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques14`= NULL, `ans14`= NULL, `date14`=NULL WHERE `ques14`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques15'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques15`= NULL, `ans15`= NULL, `date15`=NULL WHERE `ques15`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques16'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques16`= NULL, `ans16`= NULL, `date16`=NULL WHERE `ques16`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques17'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques17`= NULL, `ans17`= NULL, `date17`=NULL WHERE `ques17`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques18'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques18`= NULL, `ans18`= NULL, `date18`=NULL WHERE `ques18`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques19'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques19`= NULL, `ans19`= NULL, `date19`=NULL WHERE `ques19`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        else if ($row['ques20'] == $ques && $row['address'] == $address) {
            $query = "UPDATE `client_data` SET `ques20`= NULL, `ans20`= NULL, `date20`=NULL WHERE `ques20`='$ques' AND `address`= '$address'";
            $result = $con->query($query);

            if($result == TRUE) {
                
                echo"
                    <script>
                        alert('Deleted Successfully!');
                        window.location.href = 'view_data.php?id=$id&address=$address&visCon=$visCon&option=$option';
                    </script>
                ";
            } else {
                echo "Error";
            }
        }
        
    }
?>