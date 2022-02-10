<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style2.css">
    
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
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                    
                    <span class="title"><h2>Logsheet System</h2></span>
                </a>
                </li>
                <li>
                    <a href="#">
                       
                    <span class="title"><h2>Dashboard</h2></span>
                </a>
                </li>
                <li>
                    <a href="#">
                        
                    <span class="title"><h2>Employees</h2></span>
                </a>
                </li>
                <li>
                    <a href="#">
                       
                    <span class="title"><h2>Message</h2></span>
                </a>
                </li>
                <li>

                    <a href="#">
                    <span class="title"><h2>Sign out</h2></span>
                    
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu()"></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="search here">
                        
                    </label>
                    </div>
                    
                </div>
                </div>
            
        </div>
    </div>
    <script>
       function togglemenu(){
           let toggle=document.querySelector('.toggle');
           let navigation=document.querySelector('.navigation');
           let main=document.querySelector('.main');
           toggle.classList.toggle('active');
           navigation.classList.navigation('active');
           main.classList.main('active');
       }
    </script>
</body>
</html>