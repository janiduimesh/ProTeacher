<?php
include "config.php";//// Including the "config.php" file that contains the database connection code
?>
<!DOCTYPE html>
<html >
<head>
    
    <title>CRUD</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">
</head>
<body>
    <div class="contain">
        <button class="btn btn-primary my-5"><a href="contact.php" class="text-light">add massage</a>
            </button>
            <!--  create table for CRUD -->
            <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Massage</th>
      <th scope="col">operation</th>

    </tr>
  </thead>
  <tbody>

  <?php

  //Read data from database
  $query="SELECT * FROM `contactus` ";
  $result= mysqli_query($conn,$query);
  if($result){
    while($row = mysqli_fetch_assoc($result)){

        $id=$row['id'];
        $name=$row['name'];
        $number=$row['phone'];
        $email=$row['email'];
        $address=$row['address'];
        $massage=$row['massage'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$number.'</td>
        <td>'.$email.'</td>
        <td>'.$address.'</td>
        <td>'.$massage.'</td>

        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
      </td>
      </tr>';
    }
    
  }
  ?>
  </tbody>
</table>
    </div>
</body>
</html>