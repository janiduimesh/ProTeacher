<?php
include_once "config.php";
// Retrieve data from the contactus table based on the provided id
$id = isset($_GET['updateid']) ? $_GET['updateid'] : '';
$query = "select * from `contactus` where id = $id ";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$name = $row['name'];
$phone = $row['phone'];
$email = $row['email'];
$address = $row['address'];
$massage = $row['message'];

// Update the contactus table when the form is submitted
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $massage = $_POST['massage'];

    $query = "update `contactus` set name = '$name', phone ='$phone', email ='$email', address ='$address', message ='$massage' where id = $id";
    $result = $conn->query($query);

    if($result){
        header('location:display.php');
        exit();
    }else{
        echo "Fail";
    }
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
    <img src="image/logo.jpg" alt="logo" id="logo">

    <nav>
        <a href="pro-teacher,html"><span>Home</span></a>
        <a href="Newcourse.html"><span>Course</span></a>
        <a href="aboutus.html"><span>About Us</span></a>
        <a href="contact.php"><span>Contact</span></a>
    </nav>

    <div class="login-btns">
        <a href="###"><input type="button" value="Teach on Pro -Teacher" class="btn-group"></a>
        <a href="###"><input type="button" value="Login" class="btn-group"></a>
        <a href="###"><input type="button" value="Sign Up" class="btn-group"></a>
    </div>
</header>
    <section class="contact">
    <dev class="content">    
        <h2 style="color:black;"></h2>
    </dev>
    <dev class="container">
        
        <dev class="contactform" style="background:#F06367;" >
            <h2>Edit Massages</h2>
            <form method="post" action="">
                <dev class="inputbox">
                <label>Name:</label></br>
                <input type="text" name="name" placeholder="Full Name" value=<?php echo $name;?> required></br></br>
                </dev>

                 <dev class="inputbox">
                <label>Phone Number:</label><br>
                <input type="phone" name="phone" placeholder="Your Phone_NO" value=<?php echo $phone;?> pattern="[0-9]{10}" ><br><br> 
                 </dev>

                 <dev class="inputbox">
                 <label>Email</label><br/>
                 <input type="email" name="email" placeholder="eg. email123@example.com" value=<?php echo $email;?>  required>  <br/><br/>
                </dev>

                <dev class="inputbox">
                 <label>Address</label><br>
                 <input type="address" name="address" placeholder="Address" rows="5" cols="50" value=<?php echo $address;?> required><br/><br/>
                </dev>

                <dev class="inputbox">
                 <label>Type your massages</label><br>
                 <input type="text" name="massage" placeholder="Your Massage" value=<?php echo $massage;?> required><br><br>
                </dev>

                <dev class="inputbox">
                 <input type="submit" name="submit" id="submitbttn" value="Update" >
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
            <a href="###" class="quick">Get Started</a><br>
            <hr>
            <a href="###" class="quick">Home</a><br>
            <hr>
            <a href="###" class="quick">Contact Us</a>
        </div>

        <div>
            <h3 class="social">Stay connected</h3>
            <a href="###"><img src="image/facebook.jpg" alt="facebook" id="facebook"></a>
            <a href="###"><img src="image/instagram.jpg" alt="instagram" id="instagram"></a>
            <a href="###"><img src="image/whatsapp.jpg" alt="whatsapp" id="whatsapp"></a>
        </div>

        <div class="proteacher">
            <img src="image/logo.jpg" alt="logo" id="logo">
        </div>
    </footer>  

</body>
</html>