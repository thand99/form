<?php
include ("dbconn.php");

$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$email = $_POST['email'];
$number = $_POST['phoneNumber'];
$password = $_POST['password'];
$studentNo = $_POST['studentNo'];

$sql = "INSERT INTO `register` (`firstName`, `lastName`, `email`, `phoneNumber`, `password`, `studentNo`) 
VALUES ( '$fName', '$lName', '$email', '$number ', '$password', '$studentNo')";

$res = mysqli_query($conn,$sql);

if(isset($_POST['register']))
{ 
    $res = mysqli_query($conn,$sql);
    echo "user succesfully registered";
    mysqli_close($conn);
}
else{
    echo "not registered contact support";
}


?>