<?php
    require('./database.php');
    $attendees_id = $_GET['editid'];
    $sql = "SELECT * FROM `attendees` WHERE `attendees_id`=$attendees_id";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $attendees_name=$row['attendees_name'];
    $attendees_age=$row['attendees_age'];
    $attendees_gender=$row['attendees_gender'];

    if (isset($_POST['submit'])){
$attendees_name=$_POST['attendees_name'];
$attendees_age=$_POST['attendees_age'];
$attendees_gender=$_POST['attendees_gender'];


$sql="UPDATE `attendees` SET `attendees_id`='$attendees_id',`attendees_name`='$attendees_name',`attendees_age`='$attendees_age',`attendees_gender`='$attendees_gender' WHERE attendees_id = $attendees_id";


$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    die(mysqli_error($conn));
}
}
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
  <body class="bg-primary">
    <form method="POST" >
    <div class="container">
      <div class="row justify-content-center m-auto shadow bg-white py-3 mt-3 col-md-8">
       <h3 class="text-center  font-monospace">ATTENDEES INFORMATION</h3>
       <h5>ENTER NAME</h5>
       <div class="col-8">
        <input type="text" value=<?php echo $attendees_name;?> name="attendees_name" class="form-control" placeholder="Enter Name">
       </div>
       <div>
        <h5>ENTER AGE</h5>
       </div>
       <div class="col-8">
        <input type="text" value=<?php echo $attendees_age;?> name="attendees_age" class="form-control" placeholder="Enter Age">
       </div>
       <h5>ENTER GENDER</h5>
       <div class="col-8">
        <input type="text" value=<?php echo $attendees_gender;?> name="attendees_gender" class="form-control" placeholder="Enter Gender">
       </div>
       <hr>
       <div class="col-2 " style="padding-top: 10px">
        <button type="submit" value=<?php echo $attendees_name;?> name="submit"  class="btn btn-outline-primary">Update Information</button>
      </div>
       
      </div>
      
    </div>
    </form>

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