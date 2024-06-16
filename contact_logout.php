<?php
include "config.php";
?>
<?php

if(isset($_POST['submit'])){
	
	$name= $_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$massage=$_POST['message'];
	
	$query="INSERT INTO contactus( name, phone, email, address, message) VALUES('$name','$phone','$email','$address','$massage')";
	$result = mysqli_query($conn,$query);
	
	if($result){
		echo"1 record added";
        header('location:display.php');
	}else{
		echo"Fail";
	}
	$conn->close();
}
?>


<!DOCTYPE html>
<html >
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
 <header>  
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
    <section class="contact">
    <dev class="content">    
        <h2>Get In Touch</h2>
        <p>Thank you for visiting the PRO-Teacher website. We appreciate your interest and support in our mission to enhance education and foster a strong partnership between parents, teachers, and the community. Your visit demonstrates your dedication to the academic success and well-being of our students. We are grateful for your commitment to creating a positive and engaging learning environment. Together, we can make a difference in the lives of our children. Thank you for being an essential part of our PRO-Teacher community!</p>
    </dev>
    <dev class="container">
        <dev class="contactinfo">
            <dev class="box">
                <dev class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></dev>
                <dev class="text">
                    <h3>Address</h3>
                    <p>15/6,Ranaveera road,Colombo</p>
                </dev>
            </dev>
            <dev class="box">
                <dev class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                </dev>
                <dev class="text">
                    <h3>phone</h3>
                    <p>011 2564489</p>
                </dev>
            </dev>
            <dev class="box">
                <dev class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
                </dev>
                <dev class="text">
                    <h3>Email</h3>
                    <p>Proteacher01@gmail.com</p>
                </dev>
            </dev>
        </dev>
        <dev class="contactform">
            <h2>Send Massage</h2>
            <form method="post" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
                <dev class="inputbox">
                <label>Full Name:</label></br>
                <input type="text" name="name" placeholder="Full Name" autocomplete="off" required></br></br>
                </dev>

                 <dev class="inputbox">
                <label>Phone Number:</label><br>
                <input type="phone" name="phone" placeholder="Your Phone_NO" pattern="[0-9]{10}" autocomplete="off" ><br><br> 
                 </dev>

                 <dev class="inputbox">
                 <label>Email</label><br/>
                 <input type="email" name="email" placeholder="eg. email123@example.com" autocomplete="off" required>  <br/><br/>
                </dev>

                <dev class="inputbox">
                 <label>Address</label><br>
                 <input type="address" name="address" placeholder="Address" rows="5" cols="50" autocomplete="off" required><br/><br/>
                </dev>

                <dev class="inputbox">
                 <label>Type your massages</label><br>
                 <input type="text" name="massage" placeholder="Your Massage" autocomplete="off" required><br><br>
                </dev>

                <dev class="inputbox">
                 <input type="submit" name="submit" id="submitbttn" autocomplete="off" value="Send" >
                </dev>

           </form>
        </dev>
    </dev>
    </section>
    <footer>
        <div class="icons">
            <img src="image/telephone.jpg" alt="tele" id="tele"><br>
            <img src="image/mail.jpg" alt="mail" id="mail"><br>
            <img src="image/website.jpg" alt="web" id="web"><br>
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
            <a href="https://www.facebook.com/login/"><img src="image/facebook.jpg" alt="facebook" id="facebook"></a>
            <a href="https://www.instagram.com"><img src="image/instagram.jpg" alt="instagram" id="instagram"></a>
            <a href="https://www.whatsapp.com/"><img src="image/whatsapp.jpg" alt="whatsapp" id="whatsapp"></a>
        </div>

        <div class="proteacher">
            <img src="image/logo.png" alt="logo" id="logo">
        </div>
    </footer>  

</body>
</html>