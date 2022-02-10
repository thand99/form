<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee logsheet</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="full-page">
    <div class="navbar">
        <div>
            <a href="index.php" style=""><img width="100" height="100" id="logo" src="office.jpeg"></a>
        </div>
    

  <nav>
  <ul id ='MenuItems'>
  <li><a href="index.php">Home</a></li>
  <li><a href="AboutUs.php">About Us</a></li>
  <li><a href="ContactUs.php ">Contact Us </a></li>
  <li><a href="howitworks.php ">How It Works </a></li>
 <li class="a_right"><a class="active" href="register.php">Register</a></li>
 <li><a href="admin.php">Admin </a></li>
 
 
</ul>
</nav>
</div>
               <div class = "title">
                <h1>Welcome to Work Intergrated learning (WIL) Log sheet!</h1>
                 </div>
                  <div class = "content">
                      <h1></h1>
                       <p> In this system you will be required to write down the summary of all the work you did daily including the time you encounted the problem and how you solved it. You will will be required to fill in the duration it took you to complete the work. Work Integrated learning (WIL) is the term given to educational activities that integrate academic learning of a discipline with its practical application in the workplace. The aim is to ensure that students develop the ability to integrate their learning through a combination of academic and work-related activities.
                      </p>            
                
                   
                </div>
               



        <script>
            var card = document.getElementById("card");
            function openRegister(){
                card.style.transform = "rotateY(-180deg)";
            }
            function openLogin(){
                card.style.transform = "rotateY(0deg)";
            }
        </script>


</body>
</html>
