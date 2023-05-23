<?php
    require('./database.php');


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>ToDo'S List App!</title>
  </head>
  <body class="bg-dark">
    <form method="POST" action="./add.php">
    <div class="container">
      <div class="row justify-content-center m-auto shadow bg-white py-3 mt-3 col-md-8">
       <h3 class="text-center  font-monospace">GENERAL ATTENDANCE</h3>
       <h5>ENTER NAME</h5>
       <div class="col-8">
        <input type="text" name="attendees_name" class="form-control" placeholder="Enter Name">
       </div>
       <div>
        <h5>ENTER AGE</h5>
       </div>
       <div class="col-8">
        <input type="text" name="attendees_age" class="form-control" placeholder="Enter Age">
       </div>
       <h5>ENTER GENDER</h5>
       <div class="col-8">
        <input type="text" name="attendees_gender" class="form-control" placeholder="Enter Gender">
       </div>
       <hr>
       <div class="col-2 " style="padding-top: 10px">
        <button type="submit" name="submit" class="btn btn-outline-primary">Add Attendee</button>
      </div>
       
      </div>
      
    </div>
    </form>

<div class="container">
  <div class="col-8 bg-white m-auto mt-3">
  <table class="table">
  <thead>
    <tr class="trow">
      <th scope="col">ATTENDEES ID</th>
      <th scope="col">ATTENDEES NAME</th>
      <th scope="col">ATTENDEES AGE</th>
      <th scope="col">ATTENDEES GENDER</th>
      <th scope="col">DATE</th>

        <th scope="col">ACTIONS</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?Php 


  $sqlQuery = "SELECT * FROM `attendees`";

  $result = mysqli_query($conn, $sqlQuery);

  if($result) {
    while($row=mysqli_fetch_assoc($result)){
      $attendees_Id=$row['attendees_id'];
      $attendees_name=$row['attendees_name'];
      $attendees_age=$row['attendees_age'];
      $attendees_gender=$row['attendees_gender'];
      $date=$row['date'];

      echo '<tr>
      <th scope="row">'.$attendees_Id.'</th>
      <td>'.$attendees_name.'</td>
      <td>'.$attendees_age.'</td>
      <td>'.$attendees_gender.'</td>
      <td>'.$date.'</td>
      <td><button class="btn btn-danger"><a href="delete.php?deleteid='.$attendees_Id.'" class="text-light">Delete</a></button></td>
      <td><button class="btn btn-dark"><a href="edit.php?editid='.$attendees_Id.'" class="text-light" text-decoration="none">Edit</button></a></td>
    </tr> ';
    }

  }
  
  ?>


 
    
  </tbody>
</table>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>