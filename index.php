<?php



// Check if user is not logged in

// Include the authentication file


/*

if (isset($_POST['logout'])) {
  // Destroy the session
  session_destroy();
  header("Location: index.php");
  exit();
}
if (isset($_SESSION['email'])) {
  // If logged in, redirect to home page
  header("Location: home.php");
  exit();
}
/*
// Check if login form is submitted
if (isset($_POST=['email']) && isset($_POST['password'])) {
  $username = $_POST['email'];
  $password = $_POST['password'];
  if (login($email, $password)) {
      // If login successful, redirect to home page
      exit();
  } else {
      // If login failed, display error message
      $error = "Invalid username or password";
  }
}*/
?>


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
<style>

  .img {
    
  background-image: url('images/background-career.jpg');
  position:fixed;
  top: -2%; right: -1%; 
left:-1%;bottom:-2%;

height: auto; width: auto;
  
 backdrop-filter:brightness(50%);
}

</style>
</head>
<body class="img" style="font-family: 'Lato', sans-serif;">
  <style>
    #signin-google {
               font-size: 16px;
               font-weight: bold;
               background-color: white;
               color: black;
               padding: 10px 15px;
               margin: 8px 0;
               border:1px solid #ff5e00;;
               cursor: pointer;
               width: 10%;
               opacity: 0.9;
                 position:absolute;
                right:320px;
                 top:37px;
                 border-radius:50px;
            
      
    }
            #signin-google:hover {
    background-color:#e7e7e7;
            }
            .dropdown {
            position: relative;
            display: inline-block;
            margin-top: 14px;
            margin-left: 8px;
        }

        .dropdown .link {
            font-size: 20px; /* Default font size */
            text-decoration: none;
            color: black;
            display: inline-block;
            transition: font-size 0.3s; /* Smooth transition for font size change */
            margin-right: 20px; /* Add right margin for space */
            
        }

        /* Increase font size on hover */
        .dropdown:hover .link {
            font-size: 22px; /* Increased font size on hover */
            text-decoration: underline; 
        }

        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: relative;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            margin-top: 10px; /* Add top margin for space */
            border-radius: 10%;
        }

        /* Style for the links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of links on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }
  </style>
  <script src="myscript.js">
    
  </script>
  
<div class="bodycolr" >
  <div class="wrapper"><br> 

    <div class="pin">
      <ul id="nav"><br>
        <li class="links"><a class="active" href="index.php">HOME</a></li>
         
        <div class="dropdown">
        <!-- Displayed as simple text -->
      
        <a href="#" class="link">ASSESSMENT</a>
        <!-- Dropdown content -->
        <div class="dropdown-content">
        <?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<a href="signin.php">AFTER 10TH PREDICTION</a>
								<?php else: ?>
									<a href="html/choicestp.php"><h4>AFTER 10TH PREDICTION</h4></a>
									
								
							<?php endif ?>
              <?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<a href="signin.php">CAREER PREDICTION</a>
								<?php else: ?>
									<a href="templates/hometest.html"><h4>CAREER PREDICTION</h4></a>
									
								
							<?php endif ?>
              <?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									 <a href="signin.php">COURSES</a>
								<?php else: ?>
									<a href="courses.html"><h4>COURSES</h4></a>
									
								
							<?php endif ?>
              <?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									 <a href="signin.php">KNOWLEDGE NETWORK</a>
								<?php else: ?>
									<a href="blog.php"><h4>KNOWLEDGE NETWORK</h4></a>
									
								
							<?php endif ?>
              
           
        </div>
    </div>

    <?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<li class="links"><a href="signin.php">ABOUT</a></li>
								<?php else: ?>
									<a href="about.php"><h4>ABOUT</h4></a>
									
								
							<?php endif ?>
        
        <?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									 <li class="links"><a href="signin.php">CONTACT</a></li>
								<?php else: ?>
									<a href="contact.php"><h4>CONTACT</h4></a>
									
								
							<?php endif ?>
        
      </ul>
        <!--<img src="Capture.jpg" alt="CareerMap" width="150" height="110" ></img> -->

        <p class="tex"><b><i>CareerMap</i></b></p>
                <div>
            <!--<button type="submit" id="signin">Login</button>-->
            <button  onclick="window.location.href='signin.php'"  type="button" id="signin-google">Sign In</button>
         </div>
         

        <br><button type="submit" id="signup" onclick="window.location.href='signup.php'">Sign Up</button>
    </div>
</div>
    <p id="discover">Discover Your Carreer<br> Path</p>

    <p id="ogss">Occupational Guidance System</p>

<button type="submit" id="getstarted" onclick="window.location.href = 'signin.php'">Get Started</button>
<!--<div>
<p class="detail">DETAILS</p>
    <p id="ifs"><b>Unlock Your Potential</b></p> 

        
         <p class="c">Our website offers a wide range of tools, assessments, and expert advice to help you make<br> informed decisions about your future career. Discover your strengths, explore different <br>occupations, and find the perfect path for you.</p>
   
<img
          alt="image"
          src="https://images.unsplash.com/photo-1598257006361-0df9b1e63d42?crop=entropy&amp;
cs=tinysrgb&amp;
fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDQ3MTcxN3w&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=400"
          class="img1"
        />  
</div>-->
 


</body>
</html>


	