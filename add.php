<?php
    require('./database.php');

    if (isset($_POST['submit'])){
$attendees_name=$_POST['attendees_name'];
$attendees_age=$_POST['attendees_age'];
$attendees_gender=$_POST['attendees_gender'];


$sql="INSERT INTO `attendees`( `attendees_name`, `attendees_age`, `attendees_gender`)VALUES('$attendees_name', '$attendees_age', '$attendees_gender')";


$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    echo "Sorry We Can't Connect";
}
}
?>