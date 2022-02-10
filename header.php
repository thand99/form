<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  <li><a href="admin.php ">Admin </a></li>
 
</ul>
</nav>
</div>
<div class ="container">
          <div class="card">
              <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form action="loginBackend.php" method="POST">
                        <input name="email" id="email" type="email" class="input-box" placeholder="Enter Email" required>
                        <input name="password" id="password" type="password" class="input-box" placeholder="Password" required>
                        <button name="login" type="submit" class="submit-btn">Submit</button>
                        <button class= "btn" onclick="openRegister()">If you don't have account click here to register</button>
                    
                    </form>
                    
                 
            </div>
            <div class="card-back">
        
            <h2>REGISTER</h2>
            <form action="registerBackend.php" method="POST" id="login" class = "input-group">
                <input name="firstName" id="firstName" type="text" class="input-box" placeholder="Your firstName" required>
                <input name="lastName" id="name" type="text" class="input-box"  placeholder="Your lastName" required>
                <input name="email" id="email" type="email" class="input-box"   placeholder="Enter email" required>
                <input name="phoneNumber" id="name" type="tel" class="input-box" placeholder="Your phoneNumber" required>
                <input name="password" id="password" type="password" class="input-box" placeholder="password" required>
                <input name="studentNo" id="studentNo" type="number" class="input-box" placeholder="studentNo" required>
                <button name="register" type="submit" class="submit-btn">Submit</button>
                <button type="button" class="btn"  onclick="openLogin()">I have an account</button>
            </form>
            
            
            </div>
        </div>
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
