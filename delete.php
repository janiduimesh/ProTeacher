<?php //Delete single row
include "config.php";

if(isset($_GET['deleteid'])){

    $id=$_GET['deleteid'];

    $sql="delete from `contactus` where id= $id";
    $result=mysqli_query($conn,$sql);
    if($result){

        header('location:display.php');
        echo "correct";
    }
    else{
        die(mysqli_error($conn)); 
    }
}
?>
