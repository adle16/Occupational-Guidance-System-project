<?php
// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Occupational Guidance System</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/s.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<?php include 'headers.php'?>
	<body>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgorange.jpg); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="home.php">Home</a></li>
							<li>About</li>
						</ul>
						<h1 class="white-text">About Us</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

<div id="about" class="section">

<!-- container -->
<div class="container">

    <!-- row -->
    <div class="row">

        <div class="col-md-6">
            <div class="section-header">
                <h2 style="font-size: 35px;">About CareerMap</h2>
                <p class="lead" style="font-size: 18px; font-style: italic; margin-top: 50px;">The "About Us" page of our Occupational Guidance platform serves as the corner stone of our commitment to helping individuals navigate their professional journeys with confidence and clarity. At CareerMap, our mission is clear: to empower people at every stage of their careers by providing comprehensive guidance, resources, and support. We have dedicated ourselves to this mission, driven by a passion for seeing individuals achieve their full potential in the ever-evolving world of work. Together, we'll bring a wealth of knowledge and a shared commitment to excellence in assisting our clients in reaching their career goals. Through our platform, we uphold values of integrity, empathy, and empowerment. We believe in the transformative power of personalized guidance and strive to foster an inclusive and supportive community where individuals can thrive. Our dedication to client success is reflected in the numerous testimonials and success stories shared by those who have benefited from our services.</p>
                <!--Education seekers get a personalised experience on our site, based on educational background and career interest, enabling them to make well informed course and college decisions. The decision making is empowered with easy access to detailed information on career choices, courses, exams, colleges, admission criteria, eligibility, fees, placement statistics, rankings, reviews, scholarships, latest updates etc as well as by interacting with other Shiksha.com users, experts, current students in colleges and alumni groups. We have introduced several student oriented products and tools like Career Central, Common Application Form, Top Colleges, College Compare, Alumni Employment Stats, Campus Connect, College Reviews, College Predictors, MyShortlist and Shiksha Café.-->
            </div>

        </div>

        <div class="col-md-6">
            <div class="about-img">
                <img src="./img/about.png" alt="">
            </div>
        </div>

    </div>
    <!-- row -->
    <hr class="section-hr">
</div>
<!-- container -->
</div>
<!-- /About -->
<?php include 'footer.php'?>
</div>
</body>
</html>