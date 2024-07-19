<?php
session_start();
require_once("config.php");


// Include the authentication file






// Create connection
$conn = new mysqli('localhost','root','','project');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT username FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email , $password);
    $stmt->execute();
    $result = $stmt->get_result();
if ($result->num_rows > 0) {

$username = $row["username"];
  
// Store username and full name in session

//$_SESSION["fullname"] = $fullname;
// Check if the user is logged in
/*if (!isset($_SESSION['fullname'])) {
    header("Location: home.php");
    exit();
}*/
}
// Function to log out

function out() {
    // Destroy the session
    session_destroy();
    header("location: index.php");
    exit();
}

// Check if logout button is clicked
if (isset($_POST['l1'])) {
    out();
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <script>
  function reg() {
    // Replace 'target-page.html' with the actual URL of the page you want to go to
    window.location.href = "index.php";
    
}
</script>
<style>
   .img {
    
    background-image: url('images/background-career.jpg');
    position:fixed;
    top: -2%; right: -1%; 
  left:-1%;bottom:-2%;

  
  height: auto; width: auto;
    
   backdrop-filter:brightness(50%);
   
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
</head>
<body class="img" style="font-family: 'Lato', sans-serif;">
 <script src="myscript.js"></script>
<div class="bodyclor">
  <div class="wrapper"><br> 

    <div class="pin">
      <ul id="nav"><br>
        <li class="links"><a class="active" href="#home">HOME</a></li>
        
        <div class="dropdown">
        <!-- Displayed as simple text -->
        <a href="#" class="link">ASSESSMENTS</a>
        <!-- Dropdown content -->
        <div class="dropdown-content">
            <a href="choicestp.php">  AFTER 10TH PREDICTION</a>
            <a href="http://127.0.0.1:5000/">CAREER PREDICTION</a>
            <a href="courses.html">COURSES</a>
            <a href="blog.php">KNOWLEDGE NETWORK</a>
        </div>
    </div>
        <li class="links"><a href="about.php">ABOUT</a></li>
        <li class="links"><a href="contact.php">CONTACT</a></li>
      </ul>
        <!--<img src="Capture.jpg" alt="CareerMap" width="150" height="110" ></img> -->

        <p class="tex"><b><i>CareerMap</i></b></p>

        <br><button type="submit" style="font-size: 16px;
          font-weight: bold;
          background-color: #ff5e00;
          color: white;
          padding: 10px 15px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 10%;
          opacity: 0.9;
           position:absolute;
           right:200px;
            top:36px;
           border-radius:50px;" onmouseover="this.style.backgroundColor='#dd0000'" id="l1" onclick="window.location.href='signout.php'">Sign Out</button>

        
    </div>
</div>
    <p id="discover">Discover Your Carreer<br> Path</p>

    <p id="ogss">Welcome to Our Website !!</p>

<button type="submit" id="getstarted" onclick="window.location.href = 'choicestp.php'">Get Started</button>
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


	