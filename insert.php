<?php

    include 'config.php';

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $nic = $_POST['nic'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user(firstName, lastName, nic, gender, mobile, email, dob, password) VALUES(?,?,?,?,?,?,?,?)";
    $statement = $connection -> prepare($sql);

    $statement -> bind_param("ssssssss" , $firstName, $lastName, $nic, $gender, $mobile, $email, $dob, $password);

    if($statement -> execute())
    {
        echo 'Insert data success.';
    }
    else
    {
        echo 'Insert data error.';
    }
   $connection -> close();
?>