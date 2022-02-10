
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logsheet</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

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





<i class="fa fa-map-marker" aria-hidden="true"></i>

<section class="contact">
  <div class="content">
    <h2>Contact Us</h2>
    <p> auchjbjagscfh chwagdgha</p>
</div>
<div class="container">
   <div class="contactInfo">
     <div class="box">
         <div class="text">
           <h3>Address</h3>
           <p>14 Diederich Street, Southern Storm Properties, Witbank, 1035</p>
   </div>
       </div>
       <div class="box">
         <div class="text">
           <h3>Phone</h3>
           <p>0768282902</p>
        </div>
        </div>

        <div class="box">
                
         <div class="text">
           <h3>Email</h3>
           <p>thandimohlahlo@gmail.com OR mahlatsimohlahlo@gmail.com</p>
     </div>  
   </div>
   <div class="contactForm">
     <form>
       <h2>Send message</h2>
       <div class="inputBox">
         <input type="text" name="" required="required">
         <span>Full Name</span>
       </div>
       <div class="inputBox">
         <input type="text" name="" required="required">
         <span>Email</span>
       </div>
       <div class="inputBox">
         <textarea required="required"></textarea>
         <span>Type your message...</span>
       </div>
       <div class="inputBox">
         <input type="submit" name="" value="Send">
        
       </div>
     </form>
   </div>
</div>
</section>


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



