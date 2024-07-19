<?php
// Include config file
require_once "config.php";

// Create connection
$conn = new mysqli('localhost','root','','project');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 if(isset($_COOKIE['id']) && isset($_COOKIE['sess'])){
   $Controller = new Controller;
   if($Controller -> checkUserStatus($_COOKIE['id'], $_COOKIE['sessions'])){
       echo $Controller -> printData(intval($_COOKIE['id']));
       header("location: home.php");
   }
   
 }
// Initialize variables for email and password
$email = "";
$password = "";
$username="";
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];
	
    // Prepare SQL statement to fetch user from database
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);

    // Execute the prepared statement
    $stmt->execute();

    // Store result
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows == 1) {
        // User authenticated successfully
        $row = $result->fetch_assoc();
        $username = $row['username'];
  
        // Store username and full name in session
        
        $_SESSION['username'] = $username;
        $_SESSION["loggedin"] = true;
  
        header("location: home.php");
        // Redirect to another page, set session variables, or perform other actions
    } else {
        // Invalid email or password
        echo"<script>alert('Invalid email or password');</script>";
    }


    

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

 <!DOCTYPE html>
<html>
   <style>
      body{ 
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
color: white;
      }
	
     *{box-sizing: border-box;}
      input[type=text], input[type=password] {
         width: 40%;
         font-size: 15px;
         padding: 15px;
         margin: 5px 0 22px 0;
         display: block;
         border: none;
         background: #f1f1f1;
border-radius:4px;
      }
      label{
         font-size: 15px;
color: white;
      }
      input[type=text]:focus, input[type=password]:focus {
         background-color: #ddd;
         outline: none;
      }
      
      hr {
         border: 1px solid #f1f1f1;
         margin-bottom: 25px;
color: white;
      }
      #signin {
         font-size: 18px;
         font-weight: bold;
         background-color: #ff5e00;
         color: white;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         cursor: pointer;
         width: 20%;
         opacity: 0.9;
border-radius:4px;
      }
      #signin-google:hover {
         opacity:1;
      }
      #signin-google {
         font-size: 18px;
         font-weight: bold;
         background-color: #ff5e00;
         color: white;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         cursor: pointer;
         width: 20%;
         opacity: 0.9;
border-radius:4px;
      }
      #signin-google:hover {
         opacity:1;
      }
      .formContainer {
         padding: 16px;

      }
      .formContainer p{
         font-size: 28px;

      }
#war{
font-size:14px;
}
img{
position:absolute;
right:160px;}

#cm{
position:absolute;
right:250px;
bottom:120px;
}
#alr{
position:absolute;
right:80%;
bottom:25%;
font-size:17px;
}
.img {
    
    background-image: url('images/img1.jpg');
    position:fixed;
    top: -2%; right: -1%; 
  left:-1%;bottom:-2%;
  background-repeat: no-repeat; /* Prevent image from repeating */
            background-size: cover; /* Cover the entire element */
            background-attachment: fixed;
  height: auto; width: auto;
    
   backdrop-filter:brightness(50%);
  }
  /*background-color:#13072E;*/
   </style>
<body style="background-color:#13072E;">
<script src="myscript.js"></script>
   <form action="signin.php" method="post">
      <div class="formContainer">
     
         <h1>Login Here!!!</h1>
         


<p id="alr">Don't have an Account? <a href="signup.php"  style="color:dodgerblue">Sign-Up</a></p>
        

         <label for="email"><b>Email</b></label>
         <input type="text" placeholder="Email" name="email" required>
	

         <label for="Password"><b>Password</b></label>
         <input type="password" placeholder="Password" name="password" required>
        
        
         <p id="war"><a href="forgot.php" style="color:dodgerblue">Forgot your Password??</a>.</p>
         <div>
            <button type="submit" id="signin">Login</button>
            <button  onclick="window.location = '<?php echo $login_url; ?>'"  type="button" id="signin-google">Sign In with Google</button>
         </div>
	 
      </div>
<p><?php echo isset($login_err) ? $login_err : ''; ?></p>
   </form>
</body>
</html>