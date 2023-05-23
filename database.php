<?php


$conn=new mysqli("localhost", "root", "", "crud_db");

if(!$conn) {
    // echo "Connected Successfully";
    die(mysqli_error($conn));

}



?>