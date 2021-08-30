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
            $last_status = 'Offline';
            $class = "btn-danger";
            if($row['last_login']>$time) {
                $last_status = 'Online';
                $class = "btn-success";
            }
            $html="<tr>
                        <td>'.$uid.'</td>
                        <td>".$row['first_name']."</td>
                        <td>".$row['last_name']."</td>
                        <td>".$row['user_name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['user_type']."</td>
                        <td>".$row['company_name']."</td>
                        <td>".$row['business_type']."</td>
                        <td>".$row['is_verified']."</td>
                        <td><button type='button' class='btn '.$class.''>'.$last_status.'</button></td>
                        <td>
                            <a class='btn btn-info mb-1' href='owner_update.php?id=".$row['id']."'><i class='fa fa-pencil' aria-hidden='true'></i></a>&nbsp;
                        </td>
                        $status = ".$row['status'].";
                        if ($status == 0) {
                            $strstatus = '<a href=useractivate.php?userID=".$row['id'].">Activate User</a>';
                        } else if ($status == 1) {
                            $strstatus = '<a href=usernotactivate.php?userID=".$row['id'].">Deactivate User</a>';
                        }
                        <br><td>'.$strstatus.'</td>
                    </tr>";
            $i++;
        }
        echo $html;
    }

?>
