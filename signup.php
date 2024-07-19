<?php
session_start();

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $email = $password = "";
$username_err = $email_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate full name
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT username FROM users WHERE email = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();

                if($stmt->num_rows == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have at least 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Check input errors before inserting into database
    if(empty($username_err) && empty($email_err) && empty($password_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sss", $param_username, $param_email, $param_password);

            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_password = $password; // Creates a password hash

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: home.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $mysqli->close();
}
?>


 <!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
border-radius:4px;
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
right:83%;
bottom:5%;
font-size:17px;
}
   </style>
    </head>
<body style="background-color:#13072E;">
<script src="myscript.js"></script>
   <form action="signup.php" method="post">
      <div class="formContainer">
         <h1>Sign Up here!!!</h1>
         



<p id="alr">Already registered? <a href="signin.php"  style="color:dodgerblue">Sign-in</a></p>
         <label for="fname"><b>Username</b></label>
         <input type="text" placeholder="Username" name="username" required>

         <label for="email"><b>Email</b></label>
         <input type="text" placeholder="Email" name="email" id="email" required>
         <label for="Password"><b>Password</b></label>
         <input type="password" placeholder="Password" name="password" id="password" required>
         <label>
            <input type="checkbox" checked="checked" name="remember" style="marginbottom: 15px"> Remember me
         </label>
         <p id="war">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
         <div>
            <button type="submit" id="signup">Sign Up</button>
         </div>
	 
      </div>
   </form>
</body>
</html>