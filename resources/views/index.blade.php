
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Klinikal health care - Appointment and patient management system - Home</title>
	<meta name="Description" content="Appointment and patient management system created to simplify ">
	<!-- <link rel="icon" type="image/x-icon" href="public/uploads/favicon-blue-32x32.png" /> -->
	<link rel="icon" type="image/x-icon" href="uploads/favicon-blue-32x32.png" />
	<!-- Included Stylesheets -->
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }} " />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,500">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/material.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/mdl-selectfield.min.cs') }}s">
	<link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/flexslider.css') }}" />
	<!-- <link rel="stylesheet" href="public/css/style-blue.min.css"> -->
	<link rel="stylesheet" href="{{ URL::asset('css/style-blue.min.css') }}">
	<!-- <link rel="stylesheet" href="public/css/style.css"> -->
</head>
<body>
    <!-- Start Header Section -->
    <header id="header-transparent">
        <div class="layer-stretch hdr-center pt-4 pb-4">
            <div class="row align-items-center">
                <div class="col-lg-5 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <div class="hdr-center-account text-left p-0">
                                                <a href="login.html" class="font-14 mr-4"><i class="fa fa-sign-in"></i>Login</a>
                        <a href="register.html" class="font-14"><i class="fa fa-user-o"></i>Register</a>
                                            </div>
                </div>
                <div class="col-md-2">
                    <div class="hdr-center-logo text-center">
                        <a href="http://pepdev.com/theme-preview/klinikal/" class="d-inline-block"><img src="uploads/logo-blue.png" alt="Klinikal Health care"></a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-sm-none d-md-block d-lg-block d-xl-block">
                    <div class="pull-right">
                        <ul class="social-list social-list-white">
                                                        <li><a href="https://www.facebook.com" target="_blank" id="hdr-facebook" class="fa fa-facebook rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-facebook">Facebook</span></li>
                                                        <li><a href="https://twitter.com" target="_blank" id="hdr-twitter" class="fa fa-twitter rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-twitter">Twitter</span></li>
                                                        <li><a href="https://plus.google.com" target="_blank" id="hdr-google" class="fa fa-google rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-google">Google</span></li>
                                                        <li><a href="https://www.instagram.com" target="_blank" id="hdr-instagram" class="fa fa-instagram rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-instagram">Instagram</span></li>
                                                        <li><a href="https://www.youtube.com" target="_blank" id="hdr-youtube" class="fa fa-youtube rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-youtube">Youtube</span></li>
                                                        <li><a href="https://www.linkedin.com" target="_blank" id="hdr-linkedin" class="fa fa-linkedin rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-linkedin">Linkedin</span></li>
                                                        <li><a href="https://www.flickr.com" target="_blank" id="hdr-flickr" class="fa fa-flickr rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-flickr">Flickr</span></li>
                                                        <li><a href="https://www.rss.com" target="_blank" id="hdr-rss" class="fa fa-rss rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-rss">Rss</span></li>
                                                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-transparent-menu">
            <div class="hdr layer-stretch">
                <div class="row align-items-center justify-content-end">
                    <!-- Start Menu Section -->
                    <ul class="col menu text-left">
                        <li>
                            <a id="menu-home" class="mdl-button mdl-js-button mdl-js-ripple-effect"><a href="index.html">Home</a></a>
                        </li>
                        <li>
                            <a id="menu-pages" class="mdl-button mdl-js-button mdl-js-ripple-effect">Pages <i class="fa fa-chevron-down"></i></a>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-pages">
                                <li class="mdl-menu__item">
                                    <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=about">About</a>
                                </li>
                                <li class="mdl-menu__item">
                                    <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=contact">Contact</a>
                                </li>
                                <li class="mdl-menu__item">
                                    <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=login">Login</a>
                                </li>
                                <li class="mdl-menu__item">
                                    <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=register">Register</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href = "service.html " id="menu-service" class="mdl-button mdl-js-button mdl-js-ripple-effect">Service <i></i></a>
                            
                        </li>
                        <li>
                            <a href="doctors.html" id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect">Doctors</a>
                            
                        </li>
                        
                        <li>
                            <a id="menu-profile" class="mdl-button mdl-js-button mdl-js-ripple-effect">Profile <i class="fa fa-chevron-down"></i></a>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-profile">
                                                                <li class="mdl-menu__item">
                                    <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=login">Login</a>
                                </li>
                                <li class="mdl-menu__item">
                                    <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=register">Register</a>
                                </li>
                                <li class="mdl-menu__item">
                                    <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=forgot">Forgot Password</a>
                                </li>
                                                            </ul>
                        </li>

                        <li>
                            <a href="http://pepdev.com/theme-preview/klinikal/admin/" id="menu-admin" class="mdl-button mdl-js-button mdl-js-ripple-effect">Admin Panel</a>
                        </li>
                        <li class="mobile-menu-close"><i class="fa fa-times"></i></li>
                    </ul>
                    
                    <div id="menu-bar" class="col-2 col-md-auto"><a><i class="fa fa-bars color-white"></i></a></div>
                </div>
            </div>
        </div>
    </header><!-- End Header Section --><!-- Start Slider Section -->
<div id="slider" class="slider-1 slider-2">
	<div class="flexslider slider-wrapper">
		<ul class="slides">
						<li>
				<div class="slider-info">
					<h1 class="animated fadeInDown">Appointment and Patient Data Management</h1>
					<p class="animated fadeInDown">We have created 30+ Pages, 70+ Components or Shortcodes, Popup for this template and more in future. #twitterhash, @facebooktag</p>
				</div>
				<div class="slider-backgroung-image" style="background-image: 
                url(uploads/slider-1.jpg );"></div>
			</li>
						<li>
				<div class="slider-info">
					<h2>A Complete Solution for Clinic Managment</h2>
					<p class="animated fadeInDown">This is tag line ipsum dolor sit amet, consectetur Nihil cupiditate. mollitia maiores elit#twitterhash, @facebooktag</p>
				</div>
				<div class="slider-backgroung-image" style="background-image: 
                url(uploads/slider-2.jpg);"></div>
			</li>
						<li>
				<div class="slider-info">
					<h2>24/7 Support Services </h2>
					<p class="animated fadeInDown">Do not hesitate to contact us on our dedicated support forum. mollitia maiores temp fugit! consectetur adipisicing elit #twitterhash, @facebooktag</p>
				</div>
				<div class="slider-backgroung-image" style="background-image:
                 url(uploads/slider-3.jpg);"></div>
			</li>
					</ul>
		<div class="slider-appointment">
						<a id="slider-appointment-btn" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect animated fadeInUp">Make An Appointment</a>
					</div>
	</div>
</div><!-- End Slider Section -->
<!-- Start Home Service Section -->
<div id="hm-service" class="animated-wrapper">
	<div class="layer-stretch">
		<div class="layer-wrapper">
			<div class="layer-ttl">
				<h3 class="animated animated-down">WHAT WE DO</h3>
			</div>
			<div class="layer-container row">
				<div class="hm-service-left col-md-5">
					<img class="animated animated-up" src="uploads/hm-service.jpg" alt="Klinikal Health care">
				</div>
				<div class="hm-service-right col-md-7">
					<div class="paragraph-medium paragraph-black animated animated-up">Klinikal is a web application that our team has created for small and medium scale clinical enterprises. In this a clinic can post their data and host a website in an organised way.This application provides a customizing interface solution for appointment making according to clinic specific requirement and also handle patient visiting history and invoices</div>
					<div class="hm-service">
												<div class="hm-service-block animated animated-up">
							<i class="fa fa-stethoscope"></i>
							<span>Cardiovascular centre</span>
						</div>
												<div class="hm-service-block animated animated-up">
							<i class="fa fa-child"></i>
							<span>Childbirth Center</span>
						</div>
												<div class="hm-service-block animated animated-up">
							<i class="fa fa-heartbeat"></i>
							<span>Cardiology</span>
						</div>
												<div class="hm-service-block animated animated-up">
							<i class="fa fa-wheelchair-alt"></i>
							<span>Skin Care</span>
						</div>
												<div class="hm-service-block animated animated-up">
							<i class="fa fa-flask"></i>
							<span>Laboratory Services</span>
						</div>
												<div class="hm-service-block animated animated-up">
							<i class="fa fa-certificate"></i>
							<span>Mammography</span>
						</div>
											</div>
					<div class="hm-service-view text-center">
						<a href="http://pepdev.com/theme-preview/klinikal/index.php?route=service" class="button-icon"><span>View All Services</span><i class="fa fa-eye"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- End Home Service Section -->
<!-- Start Home About Section -->
<div id="hm-about" class="colored-background">
	<div class="layer-stretch">
		<div class="layer-wrapper animated-wrapper">
			<div class="layer-ttl layer-ttl-white">
				<h3 class="animated animated-down">Who We Are</h3>
			</div>
			<div class="row">
				<div class="col-md-7">
										<div class="hm-about-block">
						<div class="tbl-cell hm-about-icon"><i class="fa fa-user-md"></i></div>
						<div class="tbl-cell hm-about-number">
							<span>10</span>
							<p>Doctor(s)</p>
						</div>
					</div>
										<div class="hm-about-block">
						<div class="tbl-cell hm-about-icon"><i class="fa fa-ambulance"></i></div>
						<div class="tbl-cell hm-about-number">
							<span>20</span>
							<p>Room(s)</p>
						</div>
					</div>
										<div class="hm-about-block">
						<div class="tbl-cell hm-about-icon"><i class="fa fa-calendar"></i></div>
						<div class="tbl-cell hm-about-number">
							<span>23</span>
							<p>Year of Experience(s)</p>
						</div>
					</div>
										<div class="hm-about-block">
						<div class="tbl-cell hm-about-icon"><i class="fa fa-clock-o"></i></div>
						<div class="tbl-cell hm-about-number">
							<span>40</span>
							<p>OPENING HOURS PER WEEK</p>
						</div>
					</div>
										<div class="hm-about-paragraph animated animated-up">
						<p class="paragraph-medium paragraph-white">A hospital is an institution for healthcare typically providing specialized treatment for inpatient (or overnight) stays. Some hospitals primarily admit patients suffering from a specific disease or affection, or are reserved for the diagnosis and treatment of conditions affecting a specific age group. Others have a mandate that expands beyond offering dominantly curative and rehabilitative care services to include promotional, preventive and educational roles as part of a primary healthcare approach. Today, hospitals are usually funded by the state, health organizations (for profit or non-profit), by health insurances or by charities and by donations.</p>
					</div>
				</div>
				<div class="col-md-5 animated animated-up fadeInUp">
					<img class="img-thumbnail" src="uploads/hm-about.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div><!-- End Home About Section -->
<!-- Start Home Facility Section -->
<div id="hm-feature" class="layer-stretch animated-wrapper">
	<div class="layer-wrapper layer-bottom-0">
		<div class="layer-ttl">
			<h3 class="animated animated-down">Why Choose Us</h3>
		</div>
		<div class="layer-container">
						<div class="hm-feature-block animated animated-up">
				<div class="hm-feature-icon">
					<i class="fa fa-phone"></i>
				</div>
				<span>Emergency Departments</span>
				<p class="paragraph-small paragraph-black">The emergency departments of our clinic operate 24 hours a day, although staffing levels may be varied in an attempt to reflect patient volume.</p>
			</div>
						<div class="hm-feature-block animated animated-up">
				<div class="hm-feature-icon">
					<i class="fa fa-calendar"></i>
				</div>
				<span>24 hour Service</span>
				<p class="paragraph-small paragraph-black">24-7 (usually spoken "twenty-four seven") is facility that is available any time and, usually, every day in our clinic health care center. we look after you every time.</p>
			</div>
						<div class="hm-feature-block animated animated-up">
				<div class="hm-feature-icon">
					<i class="fa fa-cloud"></i>
				</div>
				<span>Advanced Technology</span>
				<p class="paragraph-small paragraph-black">Medical technology, encompasses a wide range of healthcare products and is used to diagnose, monitor or treat diseases or medical conditions affecting humans.</p>
			</div>
						<div class="hm-feature-block animated animated-up">
				<div class="hm-feature-icon">
					<i class="fa fa-ambulance"></i>
				</div>
				<span>Ambulance</span>
				<p class="paragraph-small paragraph-black">An ambulance is a vehicle for transportation of sick or injured people to, from or between places of treatment for an illness or injury.</p>
			</div>
						<div class="hm-feature-block animated animated-up">
				<div class="hm-feature-icon">
					<i class="fa fa-stethoscope"></i>
				</div>
				<span>Primary health care</span>
				<p class="paragraph-small paragraph-black">Healthcare centres, including clinics, doctor's offices, urgent care centers and ambulatory surgery centers, serve as first point of contact with a health professional.</p>
			</div>
						<div class="hm-feature-block animated animated-up">
				<div class="hm-feature-icon">
					<i class="fa fa-shopping-bag"></i>
				</div>
				<span>Pharmacies and drug stores</span>
				<p class="paragraph-small paragraph-black">Pharmacies and drug stores comprise establishments engaged in retailing prescription or nonprescription drugs and medicines, and other types of goods.</p>
			</div>
						<div class="hm-feature-block animated animated-up">
				<div class="hm-feature-icon">
					<i class="fa fa-hospital-o"></i>
				</div>
				<span>Laboratory and research</span>
				<p class="paragraph-small paragraph-black">A medical laboratory or clinical laboratory is a laboratory where tests are done on biological specimens in order to get information about the health of a patient.</p>
			</div>
						<div class="hm-feature-block animated animated-up">
				<div class="hm-feature-icon">
					<i class="fa fa-user-md"></i>
				</div>
				<span>Medical nursing home</span>
				<p class="paragraph-small paragraph-black">Medical nursing homes, including residential treatment centers and geriatric care facilities, are health care institutions which have accommodation facilities.</p>
			</div>
					</div>
	</div>
</div><!-- End Home Facility Section -->
<!-- Start Doctor Section -->
<div class="colored-background">
	<div class="layer-stretch">
		<div class="layer-wrapper animated-wrapper">
			<div class="layer-ttl layer-ttl-white">
				<h3 class="animated animated-down">Our Team</h3>
			</div>
			<div class="layer-container">
				<div id="hm-doctor-slider" class="owl-carousel owl-theme theme-owl-dot">
										<div class="hm-doctor">
						<img class="img-responsive" src="uploads/doctor-1.jpg" alt="">
						<h6>Dr. Daniel Barnes</h6>
						<p>Orthologist</p>
					</div>
										<div class="hm-doctor">
						<img class="img-responsive" src="uploads/doctor-2.jpg" alt="">
						<h6>Dr. Melissa Bates</h6>
						<p>Gynocologist</p>
					</div>
										<div class="hm-doctor">
						<img class="img-responsive" src="uploads/doctor-4.jpg" alt="">
						<h6>Dr. Cheri Aria</h6>
						<p>Dermatologist</p>
					</div>
										<div class="hm-doctor">
						<img class="img-responsive" src="uploads/doctor-3.jpg" alt="">
						<h6>Dr. Steve Soeren</h6>
						<p>Orthologist</p>
					</div>
										<div class="hm-doctor">
						<img class="img-responsive" src="uploads/doctor-6.jpg" alt="">
						<h6>Dr. Theodore Bennett</h6>
						<p>Anesthesiologist</p>
					</div>
										<div class="hm-doctor">
						<img class="img-responsive" src="uploads/doctor-8.jpg" alt="">
						<h6>Dr. Barbara Baker</h6>
						<p>Surgeon</p>
					</div>
									</div>
			</div>
		</div>
	</div>
</div><!-- End Doctor Section -->
<!-- Start Home Blog Section -->
<div id="hm-blog" class="layer-stretch animated-wrapper">
	<div class="layer-wrapper layer-bottom-0">
		<div class="layer-ttl">
			<h3 class="animated animated-down">Latest Posts</h3>
		</div>
		<div class="row text-center">
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up fadeInUp">
	<div class="theme-block-picture">
		<div class="blog-card-date">08 Oct 2017</div>
		<img src="uploads/blog-2.jpg" alt="Bladder Weakness – What, Why and Natural Remedies">
	</div>
	<div class="blog-card-ttl">
		<h3><a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog-page&id=13/Bladder-Weakness-–-What,-Why-and-Natural-Remedies">Bladder Weakness – What, Why and Natural Remedies</a></h3>
	</div>
	<div class="blog-card-details">
		<p><i class="fa fa-user"></i>Taapli</p>
		<p><a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog-page&id=13/Bladder-Weakness-–-What,-Why-and-Natural-Remedies" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a></p>
	</div>
</div>			</div>
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up fadeInUp">
	<div class="theme-block-picture">
		<div class="blog-card-date">08 Oct 2017</div>
		<img src="uploads/blog-9.jpg" alt="Breast Cancer – 7 Tips to Avoid This">
	</div>
	<div class="blog-card-ttl">
		<h3><a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog-page&id=12/Breast-Cancer-–-7-Tips-to-Avoid-This">Breast Cancer – 7 Tips to Avoid This</a></h3>
	</div>
	<div class="blog-card-details">
		<p><i class="fa fa-user"></i>Taapli</p>
		<p><a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog-page&id=12/Breast-Cancer-–-7-Tips-to-Avoid-This" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a></p>
	</div>
</div>			</div>
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up fadeInUp">
	<div class="theme-block-picture">
		<div class="blog-card-date">08 Jun 2017</div>
		<img src="uploads/blog-1.jpg" alt="Why Food Poisoning happened and How To  – Home Remedy">
	</div>
	<div class="blog-card-ttl">
		<h3><a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog-page&id=11/Why-Food-Poisoning-happened-and-How-To-–-Home-Remedy">Why Food Poisoning happened and How To  – Home Remedy</a></h3>
	</div>
	<div class="blog-card-details">
		<p><i class="fa fa-user"></i>Taapli</p>
		<p><a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog-page&id=11/Why-Food-Poisoning-happened-and-How-To-–-Home-Remedy" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a></p>
	</div>
</div>			</div>
					</div>
	</div>
</div><!-- End Home Blog Section -->
<!-- Start Home Testimonial Section -->
<div id="testimonial" class="colored-background">
	<div class="layer-stretch">
		<div class="layer-wrapper animated-wrapper">
			<div class="layer-ttl layer-ttl-white">
				<h3 class="animated animated-down">What People Say</h3>
			</div>
			<div id="testimonial-slider" class="owl-carousel owl-theme theme-owl-dot">
								<div class="testimonial-block animated animated-right">
					<img class="img-responsive" src="uploads/testimonial-3.jpg" alt="">
					<div class="paragraph-medium paragraph-white">
						<i class="fa fa-quote-left"></i> Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.					</div>
					<a>Aditya Ghanekar</a>
				</div>
								<div class="testimonial-block animated animated-right">
					<img class="img-responsive" src="uploads/testimonial-4.jpg" alt="">
					<div class="paragraph-medium paragraph-white">
						<i class="fa fa-quote-left"></i> This was my second visit here I loved it first visit but love it more on my second visit. I loved thier facility and online system.
												</div>
					<a>Amar Ghode</a>
				</div>
								<div class="testimonial-block animated animated-right">
					<img class="img-responsive" src="uploads/testimonial-2.jpg" alt="">
					<div class="paragraph-medium paragraph-white">
						<i class="fa fa-quote-left"></i> Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.					</div>
					<a>Sonu Singh</a>
				</div>
								<div class="testimonial-block animated animated-right">
					<img class="img-responsive" src="uploads/testimonial-1.jpg" alt="">
					<div class="paragraph-medium paragraph-white">
						<i class="fa fa-quote-left"></i> This was my second visit here I loved it first visit but love it more on my second visit. I loved thier facility and online system.
					</div>
					<a>Vaibhav Ramteke</a>
				</div>
								<div class="testimonial-block animated animated-right">
					<img class="img-responsive" src="uploads/testimonial-5.jpg" alt="">
					<div class="paragraph-medium paragraph-white">
						<i class="fa fa-quote-left"></i> Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.
					</div>
					<a>winceton logo</a>
				</div>
							</div>
		</div>
	</div>
</div><!-- End Home Testimonial Section -->
	<!-- Start Make an Appointment Modal -->
	<div id="appointment" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title">Make An Appointment</h4>
					<div class="appointment-hdr-back"><i class="fa fa-chevron-left"></i></div>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="appointment-form">
						<div class="appointment-part-1">
							<div class="appointment-option">
								<div class="appointment-option-department">
									<i class="fa fa-hospital-o" id="appointment-option-department"></i>
									<span class="mdl-tooltip mdl-tooltip--top" for="appointment-option-department">I Know Department</span>
								</div>
								<div class="appointment-option-doctor">
									<i class="fa fa-user-md" id="appointment-option-doctor"></i>
									<span class="mdl-tooltip mdl-tooltip--top" for="appointment-option-doctor">I Know Doctor</span>
								</div>
							</div>
							<div class="appointment-invisible">
																<input type="hidden" value="{&quot;id&quot;:1,&quot;name&quot;:&quot;Daniel Barnes&quot;,&quot;department&quot;:2,&quot;weekly&quot;:&quot;[\&quot;3\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-01-18, 2017-01-21, 2017-01-30, 2017-03-27, 2017-03-31\&quot;&quot;}" class="doctor-id-1 department-id-2" >
																<input type="hidden" value="{&quot;id&quot;:3,&quot;name&quot;:&quot;Melissa Bates&quot;,&quot;department&quot;:1,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;2\&quot;,\&quot;6\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-04-13, 2017-04-14, 2017-04-20, 2017-07-07, 2017-07-08, 2017-07-14\&quot;&quot;}" class="doctor-id-3 department-id-1" >
																<input type="hidden" value="{&quot;id&quot;:4,&quot;name&quot;:&quot;Cheri Aria&quot;,&quot;department&quot;:3,&quot;weekly&quot;:&quot;[\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-03-07, 2017-03-14, 2017-03-20, 2017-03-26\&quot;&quot;}" class="doctor-id-4 department-id-3" >
																<input type="hidden" value="{&quot;id&quot;:5,&quot;name&quot;:&quot;Steve Soeren&quot;,&quot;department&quot;:2,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-16, 2017-03-14, 2017-03-17, 2017-03-23, 2017-03-31\&quot;&quot;}" class="doctor-id-5 department-id-2" >
																<input type="hidden" value="{&quot;id&quot;:6,&quot;name&quot;:&quot;Theodore Bennett&quot;,&quot;department&quot;:4,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-15, 2017-02-16, 2017-03-07, 2017-03-15, 2017-03-23, 2017-03-31\&quot;&quot;}" class="doctor-id-6 department-id-4" >
																<input type="hidden" value="{&quot;id&quot;:7,&quot;name&quot;:&quot;Barbara Baker&quot;,&quot;department&quot;:2,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-08, 2017-06-20, 2017-06-28, 2017-06-29\&quot;&quot;}" class="doctor-id-7 department-id-2" >
																<input type="hidden" value="{&quot;id&quot;:8,&quot;name&quot;:&quot;Linda Adams&quot;,&quot;department&quot;:1,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-16, 2017-06-21, 2017-06-26, 2017-07-11, 2017-07-14, 2017-07-20, 2017-07-31\&quot;&quot;}" class="doctor-id-8 department-id-1" >
																<input type="hidden" value="{&quot;id&quot;:10,&quot;name&quot;:&quot;Vedhraj Jain&quot;,&quot;department&quot;:5,&quot;weekly&quot;:&quot;[\&quot;6\&quot;,\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25\&quot;&quot;}" class="doctor-id-10 department-id-5" >
															</div>
							<input type="hidden" name="appointment_token" value="15276e55e6cdfa6911f440f75f64501dc97cc6f4a19102dddb4c47f0c4dd1523ad639943996afef209d6a358056f3b3389a9bcb175b7413ef3547589673a2b7d">
							<div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label appointment-input">
								<select class="mdl-selectfield__select" id="appointment-department" name="department">
									<option value=""></option>
																		<option value="1">Gynaecology</option>
																		<option value="2">Orthology</option>
																		<option value="3">Dermatologist</option>
																		<option value="4">Anaesthesia</option>
																		<option value="5">Ayurvedic</option>
																	</select>
								<label class="mdl-selectfield__label" for="appointment-department">Choose Department <em>*</em></label>
							</div>
							<div id="appointment-doctor-wrapper" class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label appointment-input">
								<select class="mdl-selectfield__select" id="appointment-doctor" name="doctor">
									<option value=""></option>
								</select>
								<label class="mdl-selectfield__label" for="appointment-doctor">Choose Doctor <em>*</em></label>
							</div>
							<div class="or-label">OR</div>
							<div id="search-doctor" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ui-widget appointment-input">
								<label class="mdl-textfield__label" for="appointment-search-doctor">I Know Doctor <em>*</em></label>
								<input class="mdl-textfield__input" type="text" value="" id="appointment-search-doctor">
							</div>
							<div id="appointment-date-wrapper" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input">
								<input class="mdl-textfield__input" type="text" value="" id="appointment-date" readonly>
								<label class="mdl-textfield__label" for="appointment-date">Choose Date <em>*</em></label>
							</div>
							<div class="appointment-slot">
								<p>Choose Time Slot</p>
							</div>
							<div class="appointment-button">
								<button id="appointment-continue" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" disabled>Continue</button>
							</div>
						</div>
						<div class="appointment-loading">
							<div class="appointment-loading-gif"></div>
						</div>
						<div class="appointment-part-2">
							<div class="appointment-enterd-value"></div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input">
								<input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" value="" id="appointment-name">
								<label class="mdl-textfield__label" for="appointment-name">Name <em>*</em></label>
								<span class="mdl-textfield__error">Please Enter Valid Name!</span>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input">
								<input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="" id="appointment-email">
								<label class="mdl-textfield__label" for="appointment-email">Email Address <em>*</em></label>
								<span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input">
								<input class="mdl-textfield__input" type="text" pattern="[0-9]*" value="" id="appointment-mobile">
								<label class="mdl-textfield__label" for="appointment-mobile">Mobile Number <em>*</em></label>
								<span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
							</div>
							<div class="appointment-button">
								<button id="appointment-submit" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill">Finish</button>
							</div>
						</div>
						<div class="appointment-success">
							<p class="paragraph-medium">Hello <span id="appointment-success-name"></span></p>
							<p class="appointment-success-descr paragraph-medium">
								Your appointment for <span id="appointment-success-date"></span> at <span id="appointment-success-time"></span> 
								has been booked.							</p>
							<div class="appointment-mail-icon"><i class="fa fa-envelope-o"></i></div>
							<p class="paragraph-medium paragraph-black">For more information visit your mail box.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- End Make an Appointment Section -->
	<!-- Start of Time Table Section -->
	<div id="tt" class="animated-wrapper">
		<div class="layer-stretch">
			<div class="layer-wrapper">
				<div class="layer-ttl">
					<h3 class="animated animated-down">Our Time Table</h3>
				</div>
				<div class="layer-container">
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Sun</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 01:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Mon</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Tue</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Wed</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Thu</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Fri</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Sat</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
									</div>
			</div>
		</div>
	</div><!-- End of Time Table Section -->
	<!-- Start of Emergency Section -->
	<div id="emergency">
		<div class="layer-stretch">
			<div class="layer-wrapper animated-wrapper">
				<div class="layer-ttl">
					<h3 class="animated animated-down">On Emergency</h3>
				</div>
				<div class="layer-container">
					<div class="paragraph-medium paragraph-black animated animated-up">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique suntasdadsada </div>
					<div class="emergency-number">Call : 1800000000</div>
				</div>
			</div>
		</div>
	</div><!-- End of Emergency Section -->
	<!-- Fixed Appointment Bottom Button -->
	<div id="appointment-button">
				<button id="appointment-now" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-button--raised animated slideInUp"><i class="fa fa-plus"></i></button>
		<div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="appointment-now">Make An Appointment</div>
			</div><!-- End Fixed Appointment Bottom Button -->
	<!-- Start of Footer Section -->
	<footer id="footer">
		<div class="layer-stretch">
			<div class="row layer-wrapper">
				<div class="col-md-4 footer-block">
					<div class="footer-ttl">
						<p>Basic Info</p>
					</div>
					<div class="footer-container footer-a">
						<div class="tbl">
							<div class="tbl-row">
								<div class="tbl-cell"><i class="fa fa-map-marker"></i></div>
								<div class="tbl-cell">
									<p class="paragraph-medium paragraph-white">Your office, Building Name
Street name, Area
City, Country Pin Code</p>
								</div>
							</div>
							<div class="tbl-row">
								<div class="tbl-cell"><i class="fa fa-phone"></i></div>
								<div class="tbl-cell">
									<p class="paragraph-medium paragraph-white">11122333333</p>
								</div>
							</div>
							<div class="tbl-row">
								<div class="tbl-cell"><i class="fa fa-envelope"></i></div>
								<div class="tbl-cell">
									<p class="paragraph-medium paragraph-white">support@pepdev.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 footer-block">
					<div class="footer-ttl">
						<p>Quick Links</p>
					</div>
					<div class="footer-container footer-b">
						<div class="tbl">
							<div class="tbl-row">
								<ul class="tbl-cell">
																		<li>
										<a href="http://pepdev.com/theme-preview/klinikal/index.php?route=contact">Contact</a>
									</li>
																		<li>
										<a href="http://pepdev.com/theme-preview/klinikal/index.php?route=gallery">Gallery</a>
									</li>
																		<li>
										<a href="http://pepdev.com/theme-preview/klinikal/index.php?route=privacy-policy">Privacy policy</a>
									</li>
																		<li>
										<a href="http://pepdev.com/theme-preview/klinikal/index.php?route=terms-condition">Terms condition</a>
									</li>
																		<li>
										<a href="http://pepdev.com/theme-preview/klinikal/index.php?route=faq">Faq</a>
									</li>
																	</ul>
								<ul class="tbl-cell">
																		<li><a href="http://pepdev.com/theme-preview/klinikal/index.php?route=login">Login</a></li>
									<li><a href="http://pepdev.com/theme-preview/klinikal/index.php?route=register">Register</a></li>
									<li><a href="http://pepdev.com/theme-preview/klinikal/index.php?route=forgot">Forgot Password</a></li>
																	</ul>
							</div>
						</div>

					</div>
				</div>
				<div class="col-md-4 footer-block">
					<div class="footer-ttl">
						<p>Newsletter</p>
					</div>
					<div class="footer-container footer-c">
						<div class="footer-subscribe">
							<form action="http://pepdev.com/theme-preview/klinikal/index.php?route=subscribe" method="post">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
									<input class="mdl-textfield__input" name="email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="subscribe-email">
									<label class="mdl-textfield__label" for="subscribe-email">Email Address</label>
									<span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
								</div>
								<div class="footer-subscribe-button">
									<button type="submit" id="subscribe-submit" name="subscribe" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary">Submit</button>
								</div>
							</form>
						</div>
						<div class="social-list social-list-colored footer-social">
														<li>
								<a href="https://www.facebook.com/pepdevofficial" target="_blank" id="footer-facebook" class="fa fa-facebook"></a>
								<span class="mdl-tooltip mdl-tooltip--top" for="footer-facebook">Facebook</span>
							</li>
														<li>
								<a href="https://twitter.com/pepdevofficial" target="_blank" id="footer-twitter" class="fa fa-twitter"></a>
								<span class="mdl-tooltip mdl-tooltip--top" for="footer-twitter">Twitter</span>
							</li>
														<li>
								<a href="https://plus.google.com/110823961031348424693" target="_blank" id="footer-google" class="fa fa-google"></a>
								<span class="mdl-tooltip mdl-tooltip--top" for="footer-google">Google</span>
							</li>
														<li>
								<a href="https://www.instagram.com/pepdevofficial/" target="_blank" id="footer-instagram" class="fa fa-instagram"></a>
								<span class="mdl-tooltip mdl-tooltip--top" for="footer-instagram">Instagram</span>
							</li>
														<li>
								<a href="https://www.youtube.com/channel/UCRuPHwjNznZilEvlGIr1Y1Q" target="_blank" id="footer-youtube" class="fa fa-youtube"></a>
								<span class="mdl-tooltip mdl-tooltip--top" for="footer-youtube">Youtube</span>
							</li>
														<li>
								<a href="https://www.linkedin.com/" target="_blank" id="footer-linkedin" class="fa fa-linkedin"></a>
								<span class="mdl-tooltip mdl-tooltip--top" for="footer-linkedin">Linkedin</span>
							</li>
														<li>
								<a href="https://www.flickr.com/" target="_blank" id="footer-flickr" class="fa fa-flickr"></a>
								<span class="mdl-tooltip mdl-tooltip--top" for="footer-flickr">Flickr</span>
							</li>
														<li>
								<a href="https://www.rss.com/" target="_blank" id="footer-rss" class="fa fa-rss"></a>
								<span class="mdl-tooltip mdl-tooltip--top" for="footer-rss">Rss</span>
							</li>
													</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Start of Copyright Section -->
		<div id="copyright">
			<div class="layer-stretch">
				<div class="paragraph-medium paragraph-white">
					2018 © Pepdev ALL RIGHTS RESERVED.				</div>
			</div>
		</div><!-- End of Copyright Section -->
	</footer><!-- End of Footer Section -->

	<!-- Included Scripts -->
	<script src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
	<script src="{{ URL::asset('js/material.min.js') }}"></script>
	<script src="{{ URL::asset('js/popper.min.js') }}"></script>
	<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.flexslider.min.js') }}"></script>
	<script src="{{ URL::asset('js/mdl-selectfield.min.js') }}"></script>
	<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ URL::asset('js/datatables.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery-scrolltofixed.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ URL::asset('js/smoothscroll.min.js') }}"></script>
	<script src="{{ URL::asset('js/custom.js') }}"></script>
	<script>$('#menu-home').addClass('active');</script>	<!-- Custom Css -->
	<style></style>
	<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93901876-1', 'auto');
  ga('send', 'pageview');</script>
	
		<!-- Included Scripts -->
</body>
</html>