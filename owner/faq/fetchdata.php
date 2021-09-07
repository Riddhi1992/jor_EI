<?php
    include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>
        <h3 class="text-center m-3">Frequently Asked Questions List</h3>
    </body>
</html>

<?php 
    // include "/Applications/XAMPP/xamppfiles/htdocs/LoginSystem/connection.php";
    // session_start();
    // $result = $con->query($query);

    $query = "SELECT * FROM `client_data`";

    $query_run = mysqli_query($con, $query);

    echo "
        <div class='container'>
            <div class='row'>
    ";

    if($query_run) {
        while($row = mysqli_fetch_array($query_run)) {
            $image = $row['image'];

            echo "
                <div class='col gap-3 m-3'>
                    <div class='card h-100 shadow' style='width: 20rem;'>
                        <a href='' class='p-3'>
                            <img src='' class='card-img-top shadow' style='height: 200px;' alt='...'>
                        </a>    
                        <div class=card-body m-3'>
                            <a class='h4' href='view_data.php?id=$row[id]&topic=$row[topic]'>$row[topic]</a>&nbsp;
                            
                            <p class='card-text'>$row[description]</p>
                            <button class='btn btn-primary'><a class='text-light' href='view_data.php?id=$row[id]&topic=$row[topic]'>Edit</a></button>&nbsp;
                            <button class='btn btn-primary'><a class='text-light' href='#'>Watch</a></button>&nbsp;
                        </div>
                    </div>
                </div>
            ";
        }
    }

    echo "
            </div>
        </div>
    ";
    // if($query_run) {
    //     $j = 1;
    //     while($row = mysqli_fetch_array($query_run)) {
    //         $id = $row['id'];
    //         $ans1 = $row['ans1'];
    //         $ans2 = $row['ans2'];
    //         echo "
    //             <tr>
    //                 <th scope='row'>$j</th>
    //                 <td>$row[ques1]</td>
    //                 <td>$row[ans1]</td>
    //                 <td><a href='watch.php?id=$id'>".$ans1."</a></td>
    //                 <td>$row[date_inserted]</td>
    //                 <td><a class='btn btn-info mb-1' href='faq_update.php?id=$row[id]'><i class='fa fa-pencil' aria-hidden='true'></i></a></td>
    //             </tr>                
    //         ";
    //         $j++;
    //         echo "
    //             <tr>
    //                 <th scope='row'>$j</th>
    //                 <td>$row[ques2]</td>
    //                 <td>$row[ans2]</td>
    //                 <td><a href='watch.php?id=$id'>".$ans2."</a></td>
    //                 <td>$row[date_inserted]</td>
    //                 <td><a class='btn btn-info mb-1' href='faq_update.php?id=$row[id]'><i class='fa fa-pencil' aria-hidden='true'></i></a></td>
    //             </tr>
    //         ";
    //     }
    // }
    // else {
    //     echo"
    //         <script>
    //             alert('No record found!');
    //             window.location.href = 'faq.php';
    //         </script>
    //     ";
    // }

    // echo "
    //                 </tbody>
    //             </table>
    //         </div>
    //     </div>
    // ";

?>

