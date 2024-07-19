<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  //  header("location: login.php");
    //exit;
//}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $new_password = $confirm_password = "";
$username_err=$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    // Check if username is empty
    if(empty(trim($_POST["email"])))
    {
        $username_err = "Please enter email.";
    } 
    else
    {
        $email= trim($_POST["email"]);
    }

    // Validate new password
    if(empty(trim($_POST["new_password"])))
    {
        $new_password_err = "Please enter the new password.";     
    }
    elseif(strlen(trim($_POST["new_password"])) < 6)
    {
        $new_password_err = "Password must have atleast 6 characters.";
    } 
    else
    {
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"])))
    {
        $confirm_password_err = "Please confirm the password.";
    } 
    else
    {
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password))
        {
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($username_err) && empty($confirm_password_err))
    {
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE email = ?";
        
        if($stmt = $mysqli->prepare($sql))
        {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param( "ss", $param_password, $param_email);
            
            // Set parameters
            $param_password = $confirm_password;
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
            {
                // Password updated successfully. Destroy the session, and redirect to login page
                // Store result
                mysqli_stmt_store_result($stmt);
                echo ('stored');
                
                // Check if username exists, if yes then verify password
                session_destroy();
                header("location: signin.php");
                exit();
            }
            else
            {
                echo "Oops! Something went wrong. Please try again later.";
            }
            

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    $mysqli->close();
}

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
      button {
         font-size: 18px;
         font-weight: bold;
         background-color: #ff5e00;
         color: white;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         cursor: pointer;
         width: 30%;
         opacity: 0.9;
      }
      button:hover {
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
right:238px;
bottom:90px;
font-size:17px;
font-weight:bold;
}
   </style>
<body style="background-color:#13072E;">
   <form method="post">
      <div class="formContainer">
         <h1>Change your password !!!</h1>
         
         


         <label for="fname"><b>Email Address</b></label>
         <input type="text" placeholder="Email" name="email" required>

         <label for="email"><b>New Password</b></label>
         <input type="password" placeholder="New Password" name="new_password" required>
         <label for="Password"><b>Confirm Password</b></label>
         <input type="password" placeholder="Confirm Password" name="confirm_password" required>
         <label>
            <input type="checkbox" checked="checked" name="remember" style="marginbottom: 15px"> Remember me
         </label>
        <!-- <p id="war">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>-->
         <div>
            <button type="submit" class="signup">Confirm</button>
         </div>
	 
      </div>
   </form>
</body>
</html>