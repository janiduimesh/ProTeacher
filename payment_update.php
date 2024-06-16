<?php 
    include "config.php";

    $id = ""; 

    if(isset($_GET['updateid'])){
        $id = $_GET['updateid'];
    }

    $sql="select * from `payment` where p_id='$id'";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $country=$row['country'];
    $name=$row['name'];
    $number = $row['number'];
    $exDate = $row['ex_date'];
    $cvc = $row['cvc'];

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $country = $_POST['country'];
        $name = $_POST['cName'];
        $number = $_POST['cNumber'];
        $exDate = $_POST['cExDate'];
        $cvc = $_POST['cvc'];

        $sql = "UPDATE `payment` SET `p_id`='$id',`country`='$country', `name`='$name',`number`='$number',`ex_date`='$exDate',`cvc`='$cvc' WHERE p_id='$id'";
        $result = $conn->query($sql);


        if($result){
            //echo "Updated successfully";

            header('location:payment_details.php');
        }
        else{
            echo "Error:". $conn->error;
        }
        
        $conn->close();
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>ProTeacher</title>

        <link rel="stylesheet" href="styles/payment_.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="js/payment.js"></script>

        <script>
            // Get the radio button inside the form
            var insideRadio = document.querySelector('input[name="pmethod"][value="payment1"]');

            // Get the radio button outside the form
            var outsideRadio = document.querySelector('input[name="pmethod"][value="payment2"]');

            // Add event listener to handle the selection
            insideRadio.addEventListener('change', function() {
            outsideRadio.checked = !insideRadio.checked;
            });

            outsideRadio.addEventListener('change', function() {
            insideRadio.checked = !outsideRadio.checked;
            });
        </script>
    </head>

    <body>
        <div class="container">
            <div class="details">
                <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
                
                    <label for="country">Country: </label><br>
                    <select name="country" required>
                        <option>Afghanistan</option>
                        <option>Antarctica</option>
                        <option>Argentina</option>
                        <option>Australia</option>
                        <option>Bahamas</option>
                        <option>Bahrain</option>
                        <option>Bangladesh</option>
                        <option>Belgium</option>
                        <option>Bhutan</option>
                        <option>Brazil</option>
                        <option>Bulgaria</option>
                        <option>Cambodia</option>
                        <option>Canada</option>
                        <option>China</option>
                        <option>Colombia</option>
                        <option>Denmark</option>
                        <option>Egypt</option>
                        <option>Ethiopia</option>
                        <option>France</option>
                        <option>Germany</option>
                        <option>Greenland</option>
                        <option>India</option>
                        <option>Indonesia</option>
                        <option>Iran</option>
                        <option>Iraq</option>
                        <option>Ireland</option>
                        <option>Israel</option>
                        <option>Italy</option>
                        <option>Japan</option>
                        <option>Korea</option>
                        <option>Kuwait</option>
                        <option>Malaysia</option>
                        <option>Maldives</option>
                        <option>Mexico</option>
                        <option>Myanmar</option>
                        <option>Nepal</option>
                        <option>Netherlands</option>
                        <option>New Zealand</option>
                        <option>Nigeria</option>
                        <option>Norway</option>
                        <option>Oman</option>
                        <option>Pakistan</option>
                        <option>Peru</option>
                        <option>Philippines</option>
                        <option>Poland</option>
                        <option>Portugal</option>
                        <option>Russia</option>
                        <option>Singapore</option>
                        <option>Somalia</option>
                        <option>South Africa</option>
                        <option>Spain</option>
                        <option>Sri Lanka</option>
                        <option>Sudan</option>
                        <option>Sweden</option>
                        <option>Switzerland</option>
                        <option>Taiwan</option>
                        <option>Thailand</option>
                        <option>Tibet</option>
                        <option>Turkey</option>
                        <option>Uganda</option>
                        <option>Ukraine</option>
                        <option>United Kingdom</option>
                        <option>United States</option>
                        <option>Vietnam</option>
                        <option>Zimbabwe</option>
                    </select>
                    <br><br>

                    <div class="card-details">
                        Name on card: <br>
                        <input type="text" name="cName" placeholder="Enter your name on card" class="sw" value="<?php echo $name;?>" required><br><br>

                        Card number: <br>
                        <input type="text" name="cNumber" placeholder="Enetr card number" class="sw" value="<?php echo $number;?>" required maxlength="16"><br><br>

                        <div class="sclass">
                            <div class="eday">
                                Expiry date: <br>
                                <input type="text" name="cExDate" placeholder="MM/YY" value="<?php echo $exDate;?>" required><br><br>
                            </div>

                            <div class="cvc">
                                CVC: <br>
                                <input type="text" name="cvc" placeholder="cvc" value="<?php echo $cvc;?>" required><br>
                            </div>
                        </div>

                        <br><br>

                        <input type="submit" value="Update" id="sbmtbtn">
                    </div>
                </form>
        </div>
    </body>
</html>

<?php
    //$conn->close();
?>