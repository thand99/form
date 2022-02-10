
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log sheet system</title>
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
  
  <li class="a_right" ><a class="active" href="register.php">Register</a></li>
  <li><a href="admin.php ">Admin </a></li>
 
</ul>
</nav>
</div>
<div class = "section">
            <div class = "container">
             <div class = "content-section">
               <div class = "title">
                <h1>How Logsheet Works</h1>
                 </div>
                  <div class = "content">
                      
                       <p> Online logsheet system changes your paper work into digital which helps you control and monitor your teams and assets such as buildings and equipments in a more effective and efficient way. If you are a neatly organized individual, you will want to implement all your daily activities in a well-planned manner. By doing so, you eliminate or reduce the chances of making errors.
                      </p>            
                
                   
                </div>
               </div>
               
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


