<?php
session_start();
include "dbconn.php";
header("Location: header.php");

if(isset($_POST['submit']))
{
    echo 'User successfully registered.';

$firstName      =$_POST['firstName'];
$lastName       =$_POST['lastName'];
$email          =$_POST['email'];
$phoneNumber       =$_POST['phoneNumber'];
$password    =$_POST['password'];
$studentNo      =$_POST['studentNo'];

$insert = mysqli_query($dbconn, "INSERT INTO registration (firstName, lastName, email, phoneNumber, password, studentNo) 
VALUES ('$firstName','$lastName','$email','$phoneNumber','$password','$studentNo');" ) or die(mysqli_error($conn));
 
 echo"successfully registered";
 mysqli_close($dbconn);

}
?>
