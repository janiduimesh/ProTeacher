<?php

    include 'config.php';

    $sql = "SELECT * FROM user";

    $result = $connection -> query($sql);

    if($result -> num_rows > 0)
    {

        echo '<table border = 1>';
            echo '<tr>
                    <th>id</th>
                    <th>firstName</th>
                    <th>lastName</th>
                    <th>nic</th>
                    <th>gender</th>
                    <th>mobile</th>
                    <th>email</th>
                    <th>dob</th>
                    <th>password</th>
                  </tr>';

                  while($row = $result -> fetch_assoc())
                 {
                    echo "id : '.$row['id'].' / firstName : '.$row['firstName'].' / lastName: '.$row['lastName'].' / nic : '.$row['nic'].' / gender : '.$row['gender'].' / mobile : '.$row['mobile'].' / email : '.$row['email'].' / dob : '.$row[dob].' / password : '.$row['password']." ;

                    echo '<tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['firstName'].'</td>
                            <td>'.$row['lastName'].'</td>
                            <td>'.$row['nic'].'</td>
                            <td>'.$row['gender'].'</td>
                            <td>'.$row['mobile'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['dob'].'</td>
                            <td>'.$row['password'].'</td>
                          </tr>'
    
                 }

        echo '</table>';
    }
    else
    {
        echo "0 results";
    }
    $connection -> close();
?>