<?php 
    include "config.php";


    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $country = $_POST['country'];
        $name = $_POST['cName'];
        $number = $_POST['cNumber'];
        $exDate = $_POST['cExDate'];
        $cvc = $_POST['cvc'];

        //$sql= "INSERT INTO payment (name, number, ex_date, cvc) VALUES ($name, $number, $exDate, $cvc)";
        $sql = "INSERT INTO payment (country, name, number, ex_date, cvc) VALUES ('" . mysqli_real_escape_string($conn, $country) . "', '" . mysqli_real_escape_string($conn, $name) . "', '" . mysqli_real_escape_string($conn, $number) . "', '" . mysqli_real_escape_string($conn, $exDate) . "', '" . mysqli_real_escape_string($conn, $cvc) . "')";


        if($conn->query($sql)){
            //echo "Inserted successfully";

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

    </head>

    <body>
        <header id="myHeader">
            <img src="image/logo.png" alt="logo" id="logo">

            <nav>
                <a href="pro-teacher.html"><span>Home</span></a>
                <a href="Newcourse.html"><span>Course</span></a>
                <a href="aboutus.html"><span>About Us</span></a>
                <a href="contact.php"><span>Contact</span></a>
            </nav>

            <div class="login-btns">
                <a href="trainer.html"><input type="button" value="Teach on Pro -Teacher" class="btn-group"></a>
                <a href="pro-teacher.html"><input type="button" value="Logout" class="btn-group"></a>
                <a href="profile.php"><img src="image/profile.jpeg" alt="profile" id="profile" width="35px" height="35px"></a>
            </div>
        </header> 

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

                    <label for="p-method">Payment method: </label><br><br>

                    <div class="cards">
                        <input type="radio" name="pmethod" value="payment1" required>
                        Credit card/ Debit card<br>
                    </div>

                    <div class="card-details">
                        Name on card: <br>
                        <input type="text" name="cName" placeholder="Enter your name on card" class="sw" required><br><br>

                        Card number: <br>
                        <input type="text" name="cNumber" placeholder="Enetr card number" class="sw" required maxlength="16" size="16" pattern="[0-9]{16}"><br><br>

                        <div class="sclass">
                            <div class="eday">
                                Expiry date: <br>
                                <input type="text" name="cExDate" placeholder="MM/YY" required pattern="[0-9, /]{5}"><br><br>
                            </div>

                            <div class="cvc">
                                CVC: <br>
                                <input type="text" name="cvc" placeholder="cvc" required><br>
                            </div>
                        </div>

                        <br><br>

                        <input type="submit" value="Pay" id="sbmtbtn">
                    </div>
                </form>

                <script>
                    // Get the radio button
                    var payment1 = document.querySelector('input[name="pmethod"][value="payment1"]');

                    // Get the card details section
                    var cardDetails = document.querySelector('.card-details');

                    // Hide the card details section initially
                    cardDetails.style.display = 'none';

                    // Add event listener to the radio button
                    payment1.addEventListener('change', function() {
                        // If the radio button is checked, display the card details
                        if (payment1.checked) {
                            cardDetails.style.display = 'block';
                        } else {
                            // If the radio button is not checked, hide the card details
                            cardDetails.style.display = 'none';
                        }
                    });
                </script>


                    <br>

                    <div class="paypal">
                        <input type="radio" name="pmethod" value="payment2" required>
                        Paypal<br>
                    </div>

                    <div class="paypal-login">
                        In order to complete your transaction, we will transfer you over to PayPal's secure servers.<br><br>
                        <input type="submit" value="Pay" id="sbmtbtn">
                    </div>

                    <script>
                        // Get the radio button
                        var payment2 = document.querySelector('input[name="pmethod"][value="payment2"]');

                        // Get the PayPal login section
                        var paypalLogin = document.querySelector('.paypal-login');

                        // Hide the PayPal login section initially
                        paypalLogin.style.display = 'none';

                        // Add event listener to the radio button
                        payment2.addEventListener('change', function() {
                            // If the radio button is checked, display the PayPal login section
                            if (payment2.checked) {
                                paypalLogin.style.display = 'block';
                            } else {
                                // If the radio button is not checked, hide the PayPal login section
                                paypalLogin.style.display = 'none';
                            }
                        });
                    </script>


                    
                    </div>
                    <hr>
                    <div class="summary">
                        <b>Summary</b><br><br>
                        <div class="calc">
                            Original price:<br>
                            Discount: <br>
                            <hr>
                            <b>Total: </b>
                        </div>
                    </div>
        </div>

        <footer>
            <div class="icons">
                <img src="image/telephone.jpeg" alt="tele" id="tele"><br>
                <img src="image/mail.jpeg" alt="mail" id="mail"><br>
                <img src="image/website.jpeg" alt="web" id="web"><br>
            </div>

            <div class="contacts">
                <h3>Contacts</h3>
                +94 67 543 9870<br>
                proteacher@gmail.com<br>
                support.proteacher.lk<br>
            </div>

            <div class="links">
                <h3>Quick Links</h3>
                <a href="login.php" class="quick">Get Started</a><br>
                <hr>
                <a href="pro-teacher.html" class="quick">Home</a><br>
                <hr>
                <a href="contact.php" class="quick">Contact Us</a>
            </div>

            <div>
                <h3 class="social">Stay connected</h3>
                <a href="https://www.facebook.com/login/"><img src="facebook.jpeg" alt="facebook" id="facebook"></a>
                <a href="https://www.instagram.com"><img src="instagram.jpeg" alt="instagram" id="instagram"></a>
                <a href="https://www.whatsapp.com/"><img src="whatsapp.jpeg" alt="whatsapp" id="whatsapp"></a>
            </div>

            <div class="proteacher">
                <img src="image/logo.png" alt="logo" id="logo">
            </div>
        </footer>
    </body>
</html>

<?php
    $conn->close();
?>