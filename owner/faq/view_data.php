<?php
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>
        <h3 class="text-center m-3">Frequently Asked Questions</h3>

        <!-- DataTable Plugin Script -->
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </body>
</html>

<?php 

    if(isset($_GET['topic']) && $_GET['id']) {
        $topic = $_GET['topic'];
        $id = $_GET['id'];

        $query = "SELECT * FROM `client_data` WHERE `topic` = '$topic'";
        $result = mysqli_query($con, $query);

        if($result) {
            $row = mysqli_fetch_array($result);
            echo "
                <div class='container'>

                    <h3 class='text-center'>Company Name: $row[company_name]</h3>
                    <h4 class='text-center'>Business: $row[business_type]</h4>
                    <h4 class='text-center'>Topic: $row[topic]</h4>

                    <div class='table-responsive mb-5'>
                        <table id='example' class='table table-striped table-hover shadow-lg mt-3 mb-3'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Question</th>
                                    <th>File Name</th>
                                    <th>Video</th>
                                    <th>Last Added/Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>$row[ques1]</td>
                                    <td>$row[ans1]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques1]&ans=$row[ans1]'>$row[ans1]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques1]&ans=$row[ans1]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq01.php?id=$row[id]&topic=$row[topic]&ques=$row[ques1]&ans=$row[ans1]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static1' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>         
                                <tr>
                                    <td>2</td>
                                    <td>$row[ques2]</td>
                                    <td>$row[ans2]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques2]&ans=$row[ans2]'>$row[ans2]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques2]&ans=$row[ans2]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq02.php?id=$row[id]&topic=$row[topic]&ques=$row[ques2]&ans=$row[ans2]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static2' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>

                                </tr>          
                                <tr>
                                    <td>3</td>
                                    <td>$row[ques3]</td>
                                    <td>$row[ans3]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques3]&ans=$row[ans3]'>$row[ans3]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques3]&ans=$row[ans3]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq03.php?id=$row[id]&topic=$row[topic]&ques=$row[ques3]&ans=$row[ans3]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static3' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>4</td>
                                    <td>$row[ques4]</td>
                                    <td>$row[ans4]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques4]&ans=$row[ans4]'>$row[ans4]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques4]&ans=$row[ans4]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq04.php?id=$row[id]&topic=$row[topic]&ques=$row[ques4]&ans=$row[ans4]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static4' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>5</td>
                                    <td>$row[ques5]</td>
                                    <td>$row[ans5]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques5]&ans=$row[ans5]'>$row[ans5]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques5]&ans=$row[ans5]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq05.php?id=$row[id]&topic=$row[topic]&ques=$row[ques5]&ans=$row[ans5]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static5' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>6</td>
                                    <td>$row[ques6]</td>
                                    <td>$row[ans6]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques6]&ans=$row[ans6]'>$row[ans6]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques6]&ans=$row[ans6]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq06.php?id=$row[id]&topic=$row[topic]&ques=$row[ques6]&ans=$row[ans6]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static6' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>7</td>
                                    <td>$row[ques7]</td>
                                    <td>$row[ans7]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques7]&ans=$row[ans7]'>$row[ans7]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques7]&ans=$row[ans7]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq07.php?id=$row[id]&topic=$row[topic]&ques=$row[ques7]&ans=$row[ans7]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static7' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>8</td>
                                    <td>$row[ques8]</td>
                                    <td>$row[ans8]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques8]&ans=$row[ans8]'>$row[ans8]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques8]&ans=$row[ans8]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq08.php?id=$row[id]&topic=$row[topic]&ques=$row[ques8]&ans=$row[ans8]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static8' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>9</td>
                                    <td>$row[ques9]</td>
                                    <td>$row[ans9]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques9]&ans=$row[ans9]'>$row[ans9]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques9]&ans=$row[ans9]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq09.php?id=$row[id]&topic=$row[topic]&ques=$row[ques9]&ans=$row[ans9]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static9' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>10</td>
                                    <td>$row[ques10]</td>
                                    <td>$row[ans10]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques10]&ans=$row[ans10]'>$row[ans10]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques10]&ans=$row[ans10]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq10.php?id=$row[id]&topic=$row[topic]&ques=$row[ques10]&ans=$row[ans10]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static10' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>11</td>
                                    <td>$row[ques11]</td>
                                    <td>$row[ans11]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques11]&ans=$row[ans11]'>$row[ans11]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques11]&ans=$row[ans11]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq11.php?id=$row[id]&topic=$row[topic]&ques=$row[ques11]&ans=$row[ans11]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static11' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>         
                                <tr>
                                    <td>12</td>
                                    <td>$row[ques12]</td>
                                    <td>$row[ans12]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques12]&ans=$row[ans12]'>$row[ans12]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques12]&ans=$row[ans12]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq12.php?id=$row[id]&topic=$row[topic]&ques=$row[ques12]&ans=$row[ans12]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static12' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>

                                </tr>          
                                <tr>
                                    <td>13</td>
                                    <td>$row[ques13]</td>
                                    <td>$row[ans13]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques13]&ans=$row[ans13]'>$row[ans13]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques13]&ans=$row[ans13]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq13.php?id=$row[id]&topic=$row[topic]&ques=$row[ques13]&ans=$row[ans13]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static13' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>14</td>
                                    <td>$row[ques14]</td>
                                    <td>$row[ans14]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques14]&ans=$row[ans14]'>$row[ans14]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques14]&ans=$row[ans14]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq14.php?id=$row[id]&topic=$row[topic]&ques=$row[ques14]&ans=$row[ans14]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static14' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>15</td>
                                    <td>$row[ques15]</td>
                                    <td>$row[ans15]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques15]&ans=$row[ans15]'>$row[ans15]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques15]&ans=$row[ans15]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq15.php?id=$row[id]&topic=$row[topic]&ques=$row[ques15]&ans=$row[ans15]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static15' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>16</td>
                                    <td>$row[ques16]</td>
                                    <td>$row[ans16]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques16]&ans=$row[ans16]'>$row[ans16]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques16]&ans=$row[ans16]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq16.php?id=$row[id]&topic=$row[topic]&ques=$row[ques16]&ans=$row[ans16]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static16' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>17</td>
                                    <td>$row[ques17]</td>
                                    <td>$row[ans17]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques17]&ans=$row[ans17]'>$row[ans17]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques17]&ans=$row[ans17]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq17.php?id=$row[id]&topic=$row[topic]&ques=$row[ques17]&ans=$row[ans17]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static17' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>18</td>
                                    <td>$row[ques18]</td>
                                    <td>$row[ans18]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques18]&ans=$row[ans18]'>$row[ans18]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques18]&ans=$row[ans18]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq18.php?id=$row[id]&topic=$row[topic]&ques=$row[ques18]&ans=$row[ans18]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static18' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>19</td>
                                    <td>$row[ques19]</td>
                                    <td>$row[ans19]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques19]&ans=$row[ans19]'>$row[ans19]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques19]&ans=$row[ans19]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq19.php?id=$row[id]&topic=$row[topic]&ques=$row[ques19]&ans=$row[ans19]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static19' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                <tr>
                                    <td>20</td>
                                    <td>$row[ques20]</td>
                                    <td>$row[ans20]</td>
                                    <td><a href='watch.php?id=$id&topic=$topic&ques=$row[ques20]&ans=$row[ans20]'>$row[ans20]</a></td>
                                    <td>$row[date_inserted]</td>
                                    <td>
                                        <a class='btn btn-success mb-1' href='faq_update.php?id=$row[id]&topic=$row[topic]&ques=$row[ques20]&ans=$row[ans20]'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                        <a class='btn btn-primary mb-1' href='faq20.php?id=$row[id]&topic=$row[topic]&ques=$row[ques20]&ans=$row[ans20]'><i class='fa fa-plus'></i></a>
                                        <a class='btn btn-danger mb-1' data-bs-toggle='modal' href='#static20' role='button'><i class='far fa-trash-alt'></i></a>
                                    </td>
                                </tr>          
                                          
                            </tbody>
                        </table>
                    </div>

                    <!-- Modal -->
                    <div class='modal fade' id='static1' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques1]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static2' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques2]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static3' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques3]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static4' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques4]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static5' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques5]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static6' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques6]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static7' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques7]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static8' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques8]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static9' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques9]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static10' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques10]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static11' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques11]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static12' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques12]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static13' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques13]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static14' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques14]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static15' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques15]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static16' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques16]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static17' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques17]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static18' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques18]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static19' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques19]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal fade' id='static20' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <h5 class='modal-title text-center' id='staticBackdropLabel'>Are you sure, you want to delete?</h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a class='btn btn-danger' href='faq_delete.php?id=$row[id]&topic=$row[topic]&ques=$row[ques20]'>Delete</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
            
    }

?>