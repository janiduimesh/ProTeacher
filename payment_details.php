<?php
    include 'config.php';
?>


<!DOCTYPE html>

<html>
    <head>
        <title>payment details</title>

        <link rel="stylesheet" href="styles/payment_details.css">
    </head>

    <body>
        <div class="add">
            <a href="payment.php"><button>Add payment</button></a>
        </div>

        <div class="data_table">
            <table>
                <tr>
                    <th>p_id</th>
                    <th>country</th>
                    <th>name</th>
                    <th>number</th>
                    <th>ex_date</th>
                    <th>cvc</th>
                    <th>operation</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM payment";
                    $result = $conn->query($sql);

                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['p_id'];
                            $country = $row['country'];
                            $name = $row['name'];
                            $number = $row['number'];
                            $ex_date = $row['ex_date'];
                            $cvc = $row['cvc'];

                            echo "<tr>
                                <td>$id</td>
                                <td>$country</td>
                                <td>$name</td>
                                <td>$number</td>
                                <td>$ex_date</td>
                                <td>$cvc</td>
                                <td>
                                    <a href='payment_update.php?updateid=$id'><button id='update'>Update</button></a>
                                    <a href='payment_delete.php?deleteid=$id'><button id='delete'>Delete</button></a>
                                </td>
                            </tr>";

                        }
                    }
                ?>

                <!--  -->
            </table>
        </div>
    </body>
</html>