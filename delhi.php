<?php
 include("includes/db.php");
    session_start();
    if (isset($_POST['submit_button'])){
    	$email_to = "ritikam2015@gmail.com";
        $firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
	    $email =$_POST['email'];
		$sub = $_POST['subject'];
        $msg = $_POST['message'];
        $query = "INSERT INTO `delhi_messages` (firstname,lastname,email,subject_message,message) VALUES ('$firstname', '$lastname', '$email','$sub', '$msg')";
        $result = mysqli_query($db, $query);
        if($result){
            $smsg = "You are message has been succesfully stored ";

    $email_message = "Form details below.\n\n";
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($firstname)."\n";
    $email_message .= "Last Name: ".clean_string($lastname)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Message: ".clean_string($msg)."\n";
 
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $subject, $email_message, $headers); 
			$_SESSION['name'] = $firstname;
			/*header("location: home.php");*/
        }else{
			$_SESSION['message'] = "Failed to send";
        }
    }
    ?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Law Site</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- 
	///
	///////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.html"><img src="images/logo-tl2.png"></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="practice.html">Practice Areas</a></li>
							<li><a href="our_people.html">Our people</a></li>
							<li><a href="about.html">Who We Are</a></li>
							<li><a href="carrier.html">Careers</a></li>
							<li><a href="internship.html">Internship</a></li>
							 <li class="has-dropdown">
								<a href="#">Contact</a>
								<ul class="dropdown">
									<li><a href="delhi.php">Delhi</a></li>
									<li><a href="jabalpur.php">Jabalpur</a></li>
									<li><a href="mumbai.php">Mumbai</a></li>
									<li><a href="hyderabad.php">Hyderabad</a></li>
									<li><a href="bhopal.php">Bhopal</a></li>
									
								</ul>
							</li>
							
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/contact3.JPG);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner desc">
		   					<!--<h2 class="heading-section">Contact Us</h2>-->
		   					<!--<p class="fh5co-lead">Designed with <i class="icon-heart3"></i> by the fine folks at <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a></p>-->
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class=" col-md-12 heading-state">
					<h1 style="font-size:3em;color:#c89704;">DELHI</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					<div class="fh5co-contact-info">
						<h2>Contact Information</h2>
						<ul>
							<li class="address">202 |Nilgiri Apartments|<br>
							 9 Barakhamba Road | New Delhi <br>
							 110001</li>
							<li class="phone"><a href="tel://1234567920">+91 11 2371 1147</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h2>Get In Touch With Us</h2>
					  <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
					<form name="myform" method="POST" action="delhi.php">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Your firstname" name="firstname" required>
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="Your lastname" name="lastname" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="email" id="email" class="form-control" placeholder="Your email address" name="email" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject of this message" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="20" rows="5" class="form-control" name="message" placeholder="Say something about us" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" name="submit_button" class="btn btn-primary" style="border-radius:10px">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
	<div id="map" class="fh5co-map"></div>


	

		<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h4><a href="index.html"><img src="images/logo-tl.png"></a></h4>
					<p style="font-size:10px">Triumph Legal, initially started by alumni of Symbiosis Law School, Pune, with a zeal to provide matchless legal services and one roof solutions to our clients. Triumph Legal started its Pan India operations from New Delhi in 2014 and over the period of last 2 years has established fully operational offices at Mumbai and Jabalpur with strength of 5 Partners and 20 Lawyers.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h4>Navigation</h4>
					<ul class="fh5co-footer-links">
						<li><a href="index.html">Home</a></li>
						<li><a href="practice.html">Practice Areas</a></li>
						<li><a href="our_people.html">Our People</a></li>
						<li><a href="about.html">About us</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4> Our Offices</h4>
					<ul class="fh5co-footer-links">
						<li><a href="delhi.php">Delhi</a></li>
						<li><a href="jalandar.php">Jabalpur</a></li>
						<li><a href="mumbai.php">Mumbai</a></li>
						
					</ul>
					<br>
					<h4> Affliates Offices</h4>
					<ul class="fh5co-footer-links">
						<li><a href="bhopal.php">Bhopal</a></li>
						<li><a href="Hyderabad.php">Hyderabad</a></li>
</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Opening Hours</h4>
					<ul class="fh5co-footer-links">
						<li>Mon - Fri : 8:00 a.m-8:00 p.m</li>
						<li>Sunday Closed</li>
					</ul>
				</div>
				<div class="row copyright">
				<div class="col-md-12 text-center cl1">
					<p>
						<small class="block">&copy; 2017 . All Rights Reserved.</small> 
					</p>
					<!--<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
						</ul>
					</p>-->
				</div>
			 </div>
			</div>
		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

