<?php /*
include("header.php");
include("dbconn.php");

$password = $_POST['password'];
$email = $_POST['email'];

$sql = "SELECT * FROM `register` WHERE `email`='$email' AND `password`='$password' ";


if(isset($_POST['login']))
{ 
    $res = mysqli_query($conn,$sql);
    $check = mysqli_fetch_array($res);

    if($check == true)
    {
    echo  " successfully logged in";
    header('Location: form.php');

    }
   mysqli_close($conn);
}
else{
    echo "user don't have Acccout please! register! ";
    header('Location: register.php');
}


*/
?>
<?php

include("header.php");
include("dbconn.php");


if (!$conn) {

    echo "Connection failed!";

}

session_start(); 

include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($email)) {

        
        //header("Location: form.php?error=User fName is required");

        exit();

    }else if(empty($pass)){

        header("Location: register.php?error=Password is required");
        echo "successfully logged in";

        exit();

    }else{

        $sql =  "SELECT * FROM `register` WHERE `email`='$email' AND `password`='$pass' ";
       

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['fName'] = $row['fName'];

                $_SESSION['id'] = $row['id'];

                echo "successfully logged in";
                header("Location: form.php");

                exit();

            }else{

                header("Location: register.php?error=Incorect User fName or password");
                echo " not successfully logged in";

                exit();

            }

        }else{

            header("Location: register.php?error=Incorect User fName or password");

            exit();

        }

    }

}else{

    header("Location: register.php");

    exit();

}