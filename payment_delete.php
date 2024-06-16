<?php 
    include 'config.php';

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql="delete from `payment` where p_id=$id";
        $result=mysqli_query($conn,$sql);

        if($result){

           header('location:payment_details.php');
            //echo "Deleted successfully";
        }
        else{
            die(mysqli_error($conn)); 
        }
    }
?>