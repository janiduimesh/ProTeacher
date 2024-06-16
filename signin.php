<?php

    include 'config.php';

	if($_SERVER["REQUEST_METHOD"] === "POST"){

		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$nic = $_POST['nic'];
		$gender = $_POST['gender'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];
		$username=$_POST['username'];
		$password = $_POST['password'];

		$sql = "INSERT INTO user(firstName, lastName, nic, gender, mobile, email, dob,username, password) VALUES('$firstName','$lastName','$nic','$gender','$mobile','$email','$dob','$username','$password')";
		$statement = $conn -> prepare($sql);

		//$statement -> bind_param($firstName, $lastName, $nic, $gender, $mobile, $email, $dob, $password);

		if($statement -> execute())
		{
			echo 'Insert data success.';
		}
		else
		{
			echo 'Insert data error.';
		}
	$conn -> close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta hhp-equiv="X-UA-Compatible" connect="IE-edge">
	<meta name="viewpoint" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/signin_.css"/>
    <title>Register</title>
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

		<!---      body-Registration     ---> 
  <script src="js.js"></script>
  
    <div class = "container1">
	    <div class = "container2">
		    <h1 class = "form-title">Registration Form</h1>
			<form action = "<?php echo $_SERVER["PHP_SELF"];?>" method = "post">
			
			    <div class = "main-user-info">
				    <div class = "user-input-box">
					    <label for = "firstName">First Name</label>
						<input type = "text" id = "firstName" name = "firstName" placeholder = "Enter First Name" required />
					</div>
					
					<div class = "user-input-box">
					    <label for = "lastName">Last Name</label>
						<input type = "text" id = "lastName" name = "lastName" placeholder = "Enter Last Name" required />
					</div>
					
					<div class = "user-input-box">
					    <label for = "NIC">NIC</label>
						<input type = "text" id = "nic" name = "nic" placeholder = "Enter NIC" required />
					</div>
					
					<div class = "gender-details-box">
				    <span class = "gender-title">Gender</span>
					<div class = "gender-category">
					    <label for = "male" style = "color:white">Male</label>
						<input type = "radio" name = "gender" id = "male">
						<label for = "female" style = "color:white">Female</label>
						<input type = "radio" name = "gender" id = "female">
					</div>
					</div>
					
					<div class = "user-input-box">
					    <label for = "Mobile">Mobile Number</label>
						<input type = "text" id = "mobile" name = "mobile"  placeholder = "Enter Mobile Number" required />
					</div>
					
					<div class = "user-input-box">
					    <label for = "email">Email</label>
						<input type = "email" id = "email" name = "email" placeholder = "Enter Email" required />
					</div>
					
					<div class = "user-input-box">
					    <label for = "DateofBirth">Date Of Birth</label>
						<input type = "date" id = "dob" name = "dob" required />
					</div>
					<div class = "user-input-box">
					    <label for = "username">User Name</label>
						<input type = "text" id = "username" name = "username" placeholder = "Enter Username"  required />
					</div>
					
					
					<div class = "user-input-box">
					    <label for = "password">Password</label>
						<input type = "password" id = "password" name = "password" placeholder = "Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
					</div>
					
					<div class = "user-input-box">
					    <label for = "cofirmpassword">Comfirm Password</label>
						<input type = "password" id = "cnfrmpwd" name = "cnfrmpwd" placeholder = "Conform Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
						 onclick = "checkpassword" required />
					</div>
				
				
				<br/><br/><input  type = "checkbox" id = "checkbox" onclick = "enableButton()" >
				<h4>Accept privacy policy and terms.</h4> <br/><br/>
				
				<div class = "form-submit-btn">
				    <input type = "submit" name= "submit" value = "Register" id = "submitbtn">
				</div>
				
				<div class="p">
					<p>Already have an Account? <a href="login.php">Login</a></p>
				</div>
			</form>	
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