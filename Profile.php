<?php
	//include database
	include 'config.php';
?>
<?php

$sql = "SELECT firstName, nic,email  FROM user";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo '<div class="user-details"><h3>Account Details</h3><P> Name : '.$row["firstName"].
        '</p><p>NIC : '.$row["nic"].'</p><p>Email: '.$row["email"].
        '</p></div>';
    }
    
}
?>
<?php
        if(isset($_POST["update"])){
            $newPassword = $_POST["newPassword"];
            $update = "UPDATE user SET password = '$newPassword' ";
            
            if($conn->query($update)){
                echo '<script type="text/javascript">';
                echo 'alert("Password updated successfully");';
                echo '</script>';
            }
            else{
                echo "Error : ".$conn->error;
            }
        }

    // $conn->close();
    ?>

<!DOCTYPE html>
<html>
  <head>
     <title>Profile</title>
	
     <link rel="stylesheet" type="text/css" href="styles/Profile.css">
  
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--<title>background image</title>-->
	 
  </head>
  <body>
  
  <header class="Header">

            <img src="image/logo.png" alt="Teach" width="200" height="50" id="Teach">

            <nav>
                <a href="pro-teacher.html"><span>Home</span></a>
                <a href="Newcourse.html"><span>Course</span></a>
                <a href="aboutus.html"><span>About Us</span></a>
                <a href="contact.php"><span>Contact</span></a>
            </nav>

            <div class="login-btns">
                <a href="trainer.html"><input type="button" value="Teach on Pro -Teacher" class="btn-group"></a>
                <a href="pro-teacher.html"><input type="button" value="Logout" class="btn-group"></a>
            </div>
        </header>


<?php

    $Password = "SELECT password FROM user";
    $getPass = $conn->query($Password);

    if($getPass->num_rows > 0){
        while($row = $getPass->fetch_assoc()){
            echo "<p class='op'>Current Password : <b>".$row['password']."</b></p><br>";
        }
    }
    else{
        echo "no previous password set";
    }

?>


<p><Strong>NEW PASSWORD:</strong></p>

<form method="POST">
<input type="password" name="newPassword" class="newPassword">
<br>
<input type="submit" name="update" value="update" class="passwordUpdate">
</form>

<div class="box-1">
<img src="image/Profile.jpeg" alt="Profile" width="200" height="200" >


</form>

<footer>
            <div class="icons">
                <img src="image/phone.jpeg" alt="phone" width="20" height="20"id="phone"><br>
                <img src="image/mail.jpeg" alt="mail" width="20" height="20"id="mail"><br>
                <img src="image/network.jpeg" alt="network" width="20" height="20"id="network"><br>
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
                <a href="https://www.facebook.com/login/"><img src="image/facebook.jpeg" alt="facebook" id="facebook"></a>
                <a href="https://www.instagram.com"><img src="image/Insta.jpeg" alt="Insta" id="Insta" ></a>
                <a href="https://www.whatsapp.com/"><img src="image/whatsapp.jpeg" alt="whatsapp" id="whatsapp"></a>
            </div>

            <div class="proteacher">
                <img src="image/logo.png" alt="Teach" width="200" height="50" id="Teach">
            </div>
        </footer>
</body>
</html>