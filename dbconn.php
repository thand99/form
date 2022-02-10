<?php
   $host = "localhost"; 
   $userN = "root";
   $pass = "";
   $dbN = "employee";

   $conn = mysqli_connect($host,$userN,$pass,$dbN);

   
   if(mysqli_connect_errno()){
    die('Could not connect MySql Server:' .mysqli_connect_error());
}
    
?>