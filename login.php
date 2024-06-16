<?php 
require 'config.php';
if(isset($_POST["submit"])){
        $username=$_POST["email"];
        $password=$_POST["password"];
        $sql="SELECT * FROM user WHERE username='$username'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)>0){
            $_SESSION["login"]=true;
            $_SESSION["id"]=$row["id"];
            header("Location:contact.php");
            
        }
        else{
            echo '<script type="text/javascript">alert("Incorrect Username or password");</script>';
        }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/login.css"/>
    <title>Login</title>
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
        </div>
    </header>

     <div class="p1">
	    <p>Learn<br>Without<br>Limits</p>
    </div>
	
	<div class = "container1">
	    <div class = "container2">
		    <h1 class = "form-title">Login</h1>
			<form action = "login.inc.php" method="post">
			
				<div class = "main-user-info">
				    <div class = "user-input-box">
					    <label for = "email">Email</label>
						<input type = "text" id = "email" name = "email" placeholder = "Enter email" required />
					</div>
					
					<div class = "user-input-box">
					    <label for = "password">Password</label>
						<input type = "text" id = "password" name = "password" placeholder = "Enter password" required />
					</div>
					
					<div class = "form-submit-btn">
				    <input type = "submit" name="submit" value = "Sign In" id = "submitbtn">
					</div>
					
					<div class="inputbtn">
						<a href="#" class="facebook">
						<i class="fa fa-facebook fa-fw"></i>Sign in with facebook</a><br>
	
						<a href="#" class="google">
						<i class="fa fa-google fa-fw"></i>Sign in with Google</a>
					</div> 
                </div>
                        <div class="p2">
	                    <p>Don't have an account?<a href="signin.php">Register Now</a></p>		
                        </div>	
			</form>
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
            <a href="https://www.facebook.com/login/"><img src="image/facebook.jpeg" alt="facebook" id="facebook"></a>
            <a href="https://www.instagram.com"><img src="image/instagram.jpeg" alt="instagram" id="instagram"></a>
            <a href="https://www.whatsapp.com/"><img src="image/whatsapp.jpeg" alt="whatsapp" id="whatsapp"></a>
        </div>

        <div class="proteacher">
            <img src="image/logo.png" alt="logo" id="logo">
        </div>
    </footer>  
    
</body>
</html>