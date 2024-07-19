<!DOCTYPE html>
<html lang="en">

<head>
<style>
/* Header styles */
/* Header styles */
#header {
    background-color: rgb(120, 70, 167);
    position: fixed;
    top: 0;
    width: 100%;
}

.navbar-header {
    display: flex;
    align-items: center;
}

.logo {
    font-size: 24px;
    color: black;
    text-decoration: none;
}

.logo:hover {
    color: #ffd700;
}

.navbar-toggle {
    background-color: transparent;
    border: none;
}

.navbar-toggle span {
    background-color: black;
}

/* Hero area styles */
.hero-area {
    text-align: center;
    padding: 100px 0;
    background-size: cover;
    background-position: center;
    position: relative;
}

.hero-area h1 {
    font-size: 48px;
    color: black;
    margin-bottom: 20px;
}

.hero-area-tree {
    list-style: none;
    padding: 0;
    margin: 0;
}

.hero-area-tree li {
    display: inline-block;
    margin-right: 10px;
}

.hero-area-tree li a {
    color: black;
    text-decoration: none;
}

.hero-area-tree li a:hover {
    color: #ffd700;
}

/* Card styles */
.card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    padding: 30px;
    margin-bottom: 30px;
}

.card-heading {
    margin-bottom: 30px;
}

.card-heading h2 {
    font-size: 24px;
    color: #333;
}

/* Form styles */
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    font-weight: 600;
    color: #333;
}

.form-select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    color: #666;
}

.form-select:focus {
    outline: none;
    border-color: #6c5ce7;
}

/* Button styles */
.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #6c5ce7;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #4834d4;
}

.btn--red {
    background-color: #ff7675;
}

.btn--red:hover {
    background-color: #d63031;
}

/* Footer styles */
#footer {
    background-color: #333;
    color: #fff;
    padding: 50px 0;
}

.footer-logo .logo {
    font-size: 24px;
    color: #fff;
    text-decoration: none;
}

.footer-logo .logo:hover {
    color: #ffd700;
}

.footer-copyright {
    text-align: center;
}

.footer-copyright span {
    font-size: 14px;
}

</style>
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Intelligent Career Guidance System</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
		

  <link href="{{ url_for('static', filename='chart.css') }}" rel="stylesheet" media="all">
  
  <link href="{{ url_for('static', filename='bootstrap.min.css') }}" rel="stylesheet" media="all">
  
  <link href="{{ url_for('static', filename='font-awesome.min.css') }}" rel="stylesheet" media="all">
  
  <link href="{{ url_for('static', filename='s.css') }}" rel="stylesheet" media="all">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
</head>
<body>
<!--Header-->
        <header id="header" class="transparent-nav" style="position: fixed;background-color: rgb(120, 70, 167); top: 0;">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="http://127.0.0.1/php%20CAREERLY/main.php">CareerMap</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<?php
					// Check if the user is logged in, if not then redirect him to login page
					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):
				?>

				<!-- Navigation -->
				
				<?php else: ?>
					<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="http://127.0.0.1/php%20CAREERLY/main.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropbtn" href="javascript:void(0)">Services <span>&#11167;</span></i></a>
                            <div class="dropdown-content">
								<a href="http://127.0.0.1/php%20CAREERLY/main.php">Career Prediction</a>
                                <a href="http://127.0.0.1/php%20CAREERLY/courses.php">Courses</a>
                                <!--<a href="http://127.0.0.1/php%20CAREERLY/blog.php">Blogs</a>
                                <a href="http://127.0.0.1/php%20CAREERLY/daily_bytes.php">Daily bytes</a>
                                <a href="http://127.0.0.1/php%20CAREERLY/community.php">Community</a>-->
								<a href="http://127.0.0.1/php%20CAREERLY/blog.php">Knowledge Network</a>
								
                            </div>
                        </li>
						<li><a href="#about">About Us</a></li>
						<li><a href="http://127.0.0.1/php%20CAREERLY/contact.php">Contact Us</a></li>
						<li><a href="http://127.0.0.1/php%20CAREERLY/logout.php" >Log out</a></li>
						
                        
					</ul>
				</nav>
				<!-- /Navigation -->
				<?php endif ?>

			</div>
		</header>
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(static/img/bgc2.jpg); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="http://127.0.0.1/php%20CAREERLY/main.php">Services</a></li>
							<li><a href="http://127.0.0.1:5000/">Career Prediction</a></li>
						</ul>
						<h1 class="white-text">Get Started to Discover Yourself!</h1>

					</div>
				</div>
			</div>

		</div>

    <!-- Icons font CSS-->

    <link href=" {{ url_for('static', filename='vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <link href="{{ url_for('static', filename='vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url_for('static', filename='css/range.scss') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->

    <link href="{{ url_for('static', filename='vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">

    <link href="{{ url_for('static', filename='vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">
      <!-- Main CSS-->

    <link href="{{ url_for('static', filename='css/main.css') }}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Rate Yourself.....!!</h2>
				
                </div>
				
				
                <div class="card-body">
                    
					<form  method="POST", action="{{url_for('result')}}">
						
						<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Database Fundamentals</label>
							<div class="col-sm-9">
							<select class="form-select form-control" required aria-label="select example" name="rate_Database Fundamentals">
								  <option value="">Choose option</option>
								 <option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
								</select>
							
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Computer Architecture</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Computer Architecture" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Distributed Computing Systems</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Distributed Computing Systems" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Cyber Security</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Cyber Security" >
							        <option value="" >Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Computer Networking</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Networking" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Software Development</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Development" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Programming Skills</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Programming Skills" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Project Management</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Project Management" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Computer Forensics Fundamentals</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Computer Forensics Fundamentals" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Technical Communication skills</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Technical Communication" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">AI ML</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_AI ML" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Software Engineering</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_se" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Business Analysis</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Business Analysis" >
							        <option disabled= "disabled" selected="selected">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Communication skills</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Communication skills" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3 col-form-label">Data Science</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Data Science" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Troubleshooting skills</label>
							<div class="col-sm-9">
							 <select  class="form-control" name="rate_Troubleshooting skills" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
							
                </div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Graphics Designing</label>
							<div class="col-sm-9">
							 <select  class="form-control" name="rate" >
							        <option value="">Choose option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
							
                </div>
                <center><button class="btn btn--radius-2 btn--red" type="submit" >Discover Yourself!</button></center>
                </div>						
				</div>
</div>		

</form>		
			
    <!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" style="font-size: 30px;" href="main.php">Career.ly</a>
						</div>
					</div>
					<!-- footer logo -->


				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2021. All Rights Reserved. </span>
						</div>
					</div>
					<!-- /copyright -->
					</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->
		

</body>

</html>