<?php
    include 'database.php';

    if(isset($_GET['deleteid'])){
    $attendees_id=$_GET['deleteid'];
}
    $sql="DELETE FROM `attendees` WHERE attendees_id=$attendees_id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");
    }else {
        die(mysqli_error($conn));
    }

?>

