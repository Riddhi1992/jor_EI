<?php 
    include "../connection.php";
    session_start();
    $uid = $_SESSION['UID'];
    $time = time();

    $query = "SELECT * FROM registered_users";

    $result = $con->query($query);


    if($result->num_rows>0) {
        $i = 1;
        $html='';
        while($row = $result->fetch_assoc()) { 
            $status = 'Offline';
            $class = 'btn-danger';
            if($row['last_login'] > $time) {
                $status = 'Online';
                $class = 'btn-success';
            }
            $html = '
                <tr>
                    <td>'.$i.'</td>
                    <td>'.$row['first_name'].'</td>
                    <td>'.$row['last_name'].'</td>
                    <td>'.$row['user_name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['user_type'].'</td>
                    <td>'.$row['company_name'].'</td>
                    <td>'.$row['business_type'].'</td>
                    <td><button class="btn '.$class.'">'.$status.'</button></td>
                    <td>'.$row['is_verified'].'</td>
                    <td>
                        <a class="btn btn-info mb-1" href="admin_update.php?id='.$row['id'].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp;
                        <a class="btn btn-danger" data-bs-toggle="modal" href="#static" role="button"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            ';
            $i++;
        }
        echo $html;
    }

?>