
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinikal health care - Appointment and patient management system - Doctor page</title>
    <meta name="Description" content="Appointment and patient management system created to simplify  - Doctor">
    <!-- <link rel="icon" type="image/x-icon" href="public/uploads/favicon-blue-32x32.png" /> -->
    <link rel="icon" type="image/x-icon" href="uploads/favicon-blue-32x32.png" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,500">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/material.min.css" />
    <link rel="stylesheet" href="css/mdl-selectfield.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/flexslider.css" />
    <!-- <link rel="stylesheet" href="public/css/style-blue.min.css"> -->
    <link rel="stylesheet" href="css/style-blue.min.css">
    <!-- <link rel="stylesheet" href="public/css/style.css"> -->
</head>
<body>

    <div class="color">
        <div class="color-wrapper">
            <div class="color-handle"><i class="fa fa-gear"></i></div>
            <div class="color-container">
                <a href="index.php?route=color&colorCode=green" class="sidecolor-green"></a>
                <a href="index.php?route=color&colorCode=blue" class="sidecolor-blue"></a>
                <a href="index.php?route=color&colorCode=orange" class="sidecolor-orange"></a>
                <a href="index.php?route=color&colorCode=purple" class="sidecolor-purple"></a>
            </div>
        </div>
    </div>
    <!-- Header Start -->
    <header id="header">
        <div id="hdr-top-wrapper">
            <div class="layer-stretch hdr-top">
                <div class="hdr-top-block hidden-xs">
                    <div id="hdr-social">
                        <ul class="social-list social-list-sm">
                            <li><a class="width-auto font-13">Follow Us : </a></li>
                                                        <li><a href="https://www.facebook.com/pepdevofficial" target="_blank" id="hdr-facebook" ><i class="fa fa-facebook" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-facebook">Facebook</span></li>
                                                        <li><a href="https://twitter.com/pepdevofficial" target="_blank" id="hdr-twitter" ><i class="fa fa-twitter" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-twitter">Twitter</span></li>
                                                        <li><a href="https://plus.google.com/110823961031348424693" target="_blank" id="hdr-google" ><i class="fa fa-google" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-google">Google</span></li>
                                                        <li><a href="https://www.instagram.com/pepdevofficial/" target="_blank" id="hdr-instagram" ><i class="fa fa-instagram" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-instagram">Instagram</span></li>
                                                        <li><a href="https://www.youtube.com/channel/UCRuPHwjNznZilEvlGIr1Y1Q" target="_blank" id="hdr-youtube" ><i class="fa fa-youtube" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-youtube">Youtube</span></li>
                                                        <li><a href="https://www.linkedin.com/" target="_blank" id="hdr-linkedin" ><i class="fa fa-linkedin" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-linkedin">Linkedin</span></li>
                                                        <li><a href="https://www.flickr.com/" target="_blank" id="hdr-flickr" ><i class="fa fa-flickr" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-flickr">Flickr</span></li>
                                                        <li><a href="https://www.rss.com/" target="_blank" id="hdr-rss" ><i class="fa fa-rss" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-rss">Rss</span></li>
                                                    </ul>
                    </div>
                </div>
                <div class="hdr-top-line hidden-xs"></div>
                <div class="hdr-top-block hdr-number">
                    <div class="font-13">
                        <i class="fa fa-mobile font-20 tbl-cell"> </i> <span class="hidden-xs tbl-cell"> Emergency Number : </span> <span class="tbl-cell">1800000000</span>
                    </div>
                </div>
                <div class="hdr-top-line"></div>
                <div class="hdr-top-block">
                    <div class="theme-dropdown">
                        <a id="profile-menu" class="mdl-button mdl-js-button mdl-js-ripple-effect font-13">
                            <i class="fa fa-user-o color-black"></i> My Account                        </a>
                                                <ul id="hdr-user-menu-dd" class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="profile-menu">
                            <li class="mdl-menu__item">
                                <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=login"><i class="fa fa-sign-in"></i>Login</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=register"><i class="fa fa-user-o"></i>Register</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=forgot"><i class="fa fa-key"></i>Forgot Password</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=about"><i class="fa fa-info"></i>Help</a>
                            </li>
                        </ul>
                                            </div>
                </div>
            </div>
        </div>
        <div id="hdr-wrapper">
            <div class="layer-stretch hdr">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell hdr-logo">
                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=home">
                                <img src="public/uploads/logo-blue.png" alt="Klinikal Health care">
                            </a>
                        </div>
                        <div class="tbl-cell hdr-menu">
                            <ul class="menu">
                                <li>
                                    <a id="menu-home" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                                        Home <i class="fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-home">
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=home&theme=1">Home Style 1</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=home&theme=2">Home Style 2</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=home&theme=3">Home Style 3</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=home&theme=4">Home Style 4</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a id="menu-pages" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                                        Pages <i class="fa fa-chevron-down"></i>
                                    </a>
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
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=gallery">Gallery</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a id="menu-service" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                                        Service <i class="fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-service">
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=services&theme=1">Services Style 1</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=services&theme=2">Services Style 2</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=services&theme=3">Services Style 3</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=services&theme=4">Services Style 1 with Right Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=services&theme=5">Services Style 2 with Right Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=services&theme=6">Services Style 1 with Right Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=services&theme=7">Services Style 2 with Right Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=service&id=1/Cardiovascular-centre">Single Service Page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect">Doctors <i class="fa fa-chevron-down"></i></a>
                                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-doctor">
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=doctors&theme=1">Doctors Style 1</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=doctors&theme=2">Doctors Style 2</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=doctors&theme=3">Doctors Style 3</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=doctors&theme=4">Doctors Style 1 with Right Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=doctors&theme=5">Doctors Style 2 with Right Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=doctors&theme=6">Doctors Style 3 with Right Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=doctors&theme=7">Doctors Style 1 with Left Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=doctors&theme=8">Doctors Style 2 with Left Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=doctors&theme=9">Doctors Style 3 with Left Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a id="menu-blog" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                                        Blogs <i class="fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-blog">
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog&theme=1">Blog Style 1</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog&theme=2">Blog Style 2</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog&theme=3">Blog Style 3 with Right Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog&theme=4">Blog Style 1 with Right Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog&theme=5">Blog Style 2 with Right Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog&theme=6">Blog Style 1 with Left Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog&theme=7">Blog Style 2 with Left Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog&theme=8">Blog Style 3 with Left Sidebar</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog-page&id=1">Single Blog Page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=shortcodes" id="menu-shortcodes" class="mdl-button mdl-js-button mdl-js-ripple-effect">Shortcodes</a>
                                </li>
                                <li>
                                    <a href="http://pepdev.com/theme-preview/klinikal/admin/" id="menu-admin" class="mdl-button mdl-js-button mdl-js-ripple-effect">Admin Panel</a>
                                </li>
                                <li class="mobile-menu-close">
                                    <i class="fa fa-times"></i>
                                </li>
                            </ul>
                            <div id="menu-bar">
                                <a>
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="hdr-wrapper">
            <div class="layer-stretch hdr">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell hdr-logo">
                            <a href="http://pepdev.com/theme-preview/klinikal/">
                                <img src="public/uploads/logo-blue.png" alt="Klinikal Health care">
                            </a>
                        </div>
                        <div class="tbl-cell hdr-menu">
                        <ul class="menu">
                                                        <li>
                                <a id="menu-home" href="http://pepdev.com/theme-preview/klinikal/index.php?route=home" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                                    Home                                </a>
                            </li>
                                                        <li>
                                <a id="menu-service" href="http://pepdev.com/theme-preview/klinikal/index.php?route=services" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                                    Services                                </a>
                            </li>
                                                        <li>
                                <a id="menu-doctor" href="http://pepdev.com/theme-preview/klinikal/index.php?route=doctors" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                                    Doctors                                </a>
                            </li>
                                                        <li>
                                <a id="menu-blog" href="http://pepdev.com/theme-preview/klinikal/index.php?route=blog" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                                    Blog                                </a>
                            </li>
                                                        <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=about" id="menu-about" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                                    About                                </a>
                            </li>
                                                        <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/index.php?route=contact" id="menu-contact" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                                    Contact                                </a>
                            </li>
                                                        <li class="mobile-menu-close">
                                <i class="fa fa-times"></i>
                            </li>
                        </ul>
                        <div id="menu-bar">
                            <a>
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div> -->
    </header>
    <!-- Header End --><!-- Start Page Title Section -->
<div class="page-ttl">
	<div class="layer-stretch">
		<div class="page-ttl-container">
			<div class="page-ttl-icon">
				<i class="fa fa-user-md"></i>
			</div>
			<div class="page-ttl-name">
				<h1>Doctors</h1>
				<p><a href="http://pepdev.com/theme-preview/klinikal/index.php?route=home">Home</a> > doctor</p>
			</div>
		</div>
	</div>
</div><!-- End Page Title Section -->
<!-- Start Doctor List Section -->
<div class="layer-stretch animated-wrapper">
	<div class="layer-wrapper layer-bottom-0">
		<div class="row text-center">
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up">
	<div class="theme-block-picture">
		<img src="public/uploads/doctor-1.jpg" alt="Daniel Barnes">
	</div>
	<div class="doctor-name">
		<h4><a>Daniel Barnes</a></h4>
	</div>
	<div class="doctor-details">
		<div class="doctor-specility">
			<p>Orthologist</p>
		</div>
		<div class="doctor-details-extra">
			<p><i class="fa fa-shield"></i>CEO &amp; Founder</p>
			<p><i class="fa fa-mortar-board"></i>MBBS, MD</p>
			<p><i class="fa fa-trophy"></i>Awards: 8</p>
			<p><i class="fa fa-star"></i>Experience: 17 year</p>
		</div>
	</div>
	<div class="doctor-social">
		<ul class="social-list social-list-bordered social-list-rounded">
			<li><a href="https://www.facebook.com" class="fa fa-facebook" target="_blank"></a></li>
			<li><a href="https://www.twitter.com" class="fa fa-twitter" target="_blank"></a></li>
			<li><a href="https://www.google.com" class="fa fa-google" target="_blank"></a></li>
			<li><a href="https://www.instagram.com" class="fa fa-instagram" target="_blank"></a></li>
		</ul>
	</div>
</div>			</div>
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up">
	<div class="theme-block-picture">
		<img src="public/uploads/doctor-2.jpg" alt="Melissa Bates">
	</div>
	<div class="doctor-name">
		<h4><a>Melissa Bates</a></h4>
	</div>
	<div class="doctor-details">
		<div class="doctor-specility">
			<p>Gynocologist</p>
		</div>
		<div class="doctor-details-extra">
			<p><i class="fa fa-shield"></i>C00s</p>
			<p><i class="fa fa-mortar-board"></i>MBBS, MD</p>
			<p><i class="fa fa-trophy"></i>Awards: 5</p>
			<p><i class="fa fa-star"></i>Experience: 9 year</p>
		</div>
	</div>
	<div class="doctor-social">
		<ul class="social-list social-list-bordered social-list-rounded">
			<li><a href="https://www.facebook.com" class="fa fa-facebook" target="_blank"></a></li>
			<li><a href="https://www.twitter.com" class="fa fa-twitter" target="_blank"></a></li>
			<li><a href="" class="fa fa-google" target="_blank"></a></li>
			<li><a href="https://www.instagram.com" class="fa fa-instagram" target="_blank"></a></li>
		</ul>
	</div>
</div>			</div>
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up">
	<div class="theme-block-picture">
		<img src="public/uploads/doctor-4.jpg" alt="Cheri Aria">
	</div>
	<div class="doctor-name">
		<h4><a>Cheri Aria</a></h4>
	</div>
	<div class="doctor-details">
		<div class="doctor-specility">
			<p>Dermatologist</p>
		</div>
		<div class="doctor-details-extra">
			<p><i class="fa fa-shield"></i>Intern</p>
			<p><i class="fa fa-mortar-board"></i>MBBS, MD</p>
			<p><i class="fa fa-trophy"></i>Awards: 12</p>
			<p><i class="fa fa-star"></i>Experience: 6 year</p>
		</div>
	</div>
	<div class="doctor-social">
		<ul class="social-list social-list-bordered social-list-rounded">
			<li><a href="https://www.facebook.com" class="fa fa-facebook" target="_blank"></a></li>
			<li><a href="https://www.twitter.com" class="fa fa-twitter" target="_blank"></a></li>
			<li><a href="https://www.google.com" class="fa fa-google" target="_blank"></a></li>
			<li><a href="https://www.instagram.com" class="fa fa-instagram" target="_blank"></a></li>
		</ul>
	</div>
</div>			</div>
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up">
	<div class="theme-block-picture">
		<img src="public/uploads/doctor-3.jpg" alt="Steve Soeren">
	</div>
	<div class="doctor-name">
		<h4><a>Steve Soeren</a></h4>
	</div>
	<div class="doctor-details">
		<div class="doctor-specility">
			<p>Orthologist</p>
		</div>
		<div class="doctor-details-extra">
			<p><i class="fa fa-shield"></i>Senior Resident</p>
			<p><i class="fa fa-mortar-board"></i>MBBS, MD</p>
			<p><i class="fa fa-trophy"></i>Awards: 21</p>
			<p><i class="fa fa-star"></i>Experience: 14 year</p>
		</div>
	</div>
	<div class="doctor-social">
		<ul class="social-list social-list-bordered social-list-rounded">
			<li><a href="https://www.facebook.com" class="fa fa-facebook" target="_blank"></a></li>
			<li><a href="" class="fa fa-twitter" target="_blank"></a></li>
			<li><a href="" class="fa fa-google" target="_blank"></a></li>
			<li><a href="" class="fa fa-instagram" target="_blank"></a></li>
		</ul>
	</div>
</div>			</div>
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up">
	<div class="theme-block-picture">
		<img src="public/uploads/doctor-6.jpg" alt="Theodore Bennett">
	</div>
	<div class="doctor-name">
		<h4><a>Theodore Bennett</a></h4>
	</div>
	<div class="doctor-details">
		<div class="doctor-specility">
			<p>Anesthesiologist</p>
		</div>
		<div class="doctor-details-extra">
			<p><i class="fa fa-shield"></i>Senior Resident</p>
			<p><i class="fa fa-mortar-board"></i>MBBS, MD</p>
			<p><i class="fa fa-trophy"></i>Awards: 12</p>
			<p><i class="fa fa-star"></i>Experience: 9 year</p>
		</div>
	</div>
	<div class="doctor-social">
		<ul class="social-list social-list-bordered social-list-rounded">
			<li><a href="https://www.facebook.com" class="fa fa-facebook" target="_blank"></a></li>
			<li><a href="https://www.twitter.com" class="fa fa-twitter" target="_blank"></a></li>
			<li><a href="https://www.google.com" class="fa fa-google" target="_blank"></a></li>
			<li><a href="" class="fa fa-instagram" target="_blank"></a></li>
		</ul>
	</div>
</div>			</div>
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up">
	<div class="theme-block-picture">
		<img src="public/uploads/doctor-8.jpg" alt="Barbara Baker">
	</div>
	<div class="doctor-name">
		<h4><a>Barbara Baker</a></h4>
	</div>
	<div class="doctor-details">
		<div class="doctor-specility">
			<p>Surgeon</p>
		</div>
		<div class="doctor-details-extra">
			<p><i class="fa fa-shield"></i>S.R.</p>
			<p><i class="fa fa-mortar-board"></i>MBBS, MD</p>
			<p><i class="fa fa-trophy"></i>Awards: 13</p>
			<p><i class="fa fa-star"></i>Experience: 17 year</p>
		</div>
	</div>
	<div class="doctor-social">
		<ul class="social-list social-list-bordered social-list-rounded">
			<li><a href="" class="fa fa-facebook" target="_blank"></a></li>
			<li><a href="" class="fa fa-twitter" target="_blank"></a></li>
			<li><a href="" class="fa fa-google" target="_blank"></a></li>
			<li><a href="" class="fa fa-instagram" target="_blank"></a></li>
		</ul>
	</div>
</div>			</div>
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up">
	<div class="theme-block-picture">
		<img src="public/uploads/doctor-10.jpg" alt="Linda Adams">
	</div>
	<div class="doctor-name">
		<h4><a>Linda Adams</a></h4>
	</div>
	<div class="doctor-details">
		<div class="doctor-specility">
			<p>Gynocologist</p>
		</div>
		<div class="doctor-details-extra">
			<p><i class="fa fa-shield"></i>Senior Resident</p>
			<p><i class="fa fa-mortar-board"></i>MBBS, MD</p>
			<p><i class="fa fa-trophy"></i>Awards: 7</p>
			<p><i class="fa fa-star"></i>Experience: 16 year</p>
		</div>
	</div>
	<div class="doctor-social">
		<ul class="social-list social-list-bordered social-list-rounded">
			<li><a href="" class="fa fa-facebook" target="_blank"></a></li>
			<li><a href="" class="fa fa-twitter" target="_blank"></a></li>
			<li><a href="" class="fa fa-google" target="_blank"></a></li>
			<li><a href="" class="fa fa-instagram" target="_blank"></a></li>
		</ul>
	</div>
</div>			</div>
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up">
	<div class="theme-block-picture">
		<img src="public/uploads/doctor-9.jpg" alt="Janet Collins">
	</div>
	<div class="doctor-name">
		<h4><a>Janet Collins</a></h4>
	</div>
	<div class="doctor-details">
		<div class="doctor-specility">
			<p>OB/GYN</p>
		</div>
		<div class="doctor-details-extra">
			<p><i class="fa fa-shield"></i>Intern</p>
			<p><i class="fa fa-mortar-board"></i>MBBS, MD</p>
			<p><i class="fa fa-trophy"></i>Awards: 2</p>
			<p><i class="fa fa-star"></i>Experience: 5 year</p>
		</div>
	</div>
	<div class="doctor-social">
		<ul class="social-list social-list-bordered social-list-rounded">
			<li><a href="" class="fa fa-facebook" target="_blank"></a></li>
			<li><a href="" class="fa fa-twitter" target="_blank"></a></li>
			<li><a href="" class="fa fa-google" target="_blank"></a></li>
			<li><a href="" class="fa fa-instagram" target="_blank"></a></li>
		</ul>
	</div>
</div>			</div>
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up">
	<div class="theme-block-picture">
		<img src="public/uploads/doctor-11.jpg" alt="Vedhraj Jain">
	</div>
	<div class="doctor-name">
		<h4><a>Vedhraj Jain</a></h4>
	</div>
	<div class="doctor-details">
		<div class="doctor-specility">
			<p>BAMS</p>
		</div>
		<div class="doctor-details-extra">
			<p><i class="fa fa-shield"></i>Head of Department</p>
			<p><i class="fa fa-mortar-board"></i>B.A.M.S.</p>
			<p><i class="fa fa-trophy"></i>Awards: 28</p>
			<p><i class="fa fa-star"></i>Experience: 32 year</p>
		</div>
	</div>
	<div class="doctor-social">
		<ul class="social-list social-list-bordered social-list-rounded">
			<li><a href="" class="fa fa-facebook" target="_blank"></a></li>
			<li><a href="" class="fa fa-twitter" target="_blank"></a></li>
			<li><a href="" class="fa fa-google" target="_blank"></a></li>
			<li><a href="" class="fa fa-instagram" target="_blank"></a></li>
		</ul>
	</div>
</div>			</div>
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up">
	<div class="theme-block-picture">
		<img src="public/uploads/doctor-5.jpg" alt="Emily Rasberry">
	</div>
	<div class="doctor-name">
		<h4><a>Emily Rasberry</a></h4>
	</div>
	<div class="doctor-details">
		<div class="doctor-specility">
			<p>Pathologist</p>
		</div>
		<div class="doctor-details-extra">
			<p><i class="fa fa-shield"></i>Resident</p>
			<p><i class="fa fa-mortar-board"></i>MBBS, MD</p>
			<p><i class="fa fa-trophy"></i>Awards: 4</p>
			<p><i class="fa fa-star"></i>Experience: 8 year</p>
		</div>
	</div>
	<div class="doctor-social">
		<ul class="social-list social-list-bordered social-list-rounded">
			<li><a href="https://www.facebook.com" class="fa fa-facebook" target="_blank"></a></li>
			<li><a href="https://www.twitter.com" class="fa fa-twitter" target="_blank"></a></li>
			<li><a href="https://www.google.com" class="fa fa-google" target="_blank"></a></li>
			<li><a href="https://www.instagram.com" class="fa fa-instagram" target="_blank"></a></li>
		</ul>
	</div>
</div>			</div>
						<div class="col-sm-6 col-md-4">
				<div class="theme-block theme-block-hover animated animated-up">
	<div class="theme-block-picture">
		<img src="public/uploads/doctor-12.jpg" alt="Nancy Allen">
	</div>
	<div class="doctor-name">
		<h4><a>Nancy Allen</a></h4>
	</div>
	<div class="doctor-details">
		<div class="doctor-specility">
			<p>Gynocologist</p>
		</div>
		<div class="doctor-details-extra">
			<p><i class="fa fa-shield"></i>Resident</p>
			<p><i class="fa fa-mortar-board"></i>MBBS, MS</p>
			<p><i class="fa fa-trophy"></i>Awards: 2</p>
			<p><i class="fa fa-star"></i>Experience: 7 year</p>
		</div>
	</div>
	<div class="doctor-social">
		<ul class="social-list social-list-bordered social-list-rounded">
			<li><a href="https://www.facebook.com" class="fa fa-facebook" target="_blank"></a></li>
			<li><a href="https://www.twitter.com" class="fa fa-twitter" target="_blank"></a></li>
			<li><a href="https://www.google.com" class="fa fa-google" target="_blank"></a></li>
			<li><a href="https://www.instagram.com" class="fa fa-instagram" target="_blank"></a></li>
		</ul>
	</div>
</div>			</div>
					</div>
	</div>
</div><!-- End Doctor List Section -->

<!-- Start Department div -->
<div class="colored-background">
	<div class="layer-stretch">
		<div class="layer-wrapper layer-bottom-0 animated-wrapper">
			<div class="layer-ttl layer-ttl-white">
				<h3 class="animated animated-down">Our Department </h3>
			</div>
			<div class="layer-container">
								<div class="department-block animated animated-up">
					<div class="tbl-cell department-icon"><i class="fa fa-female"></i></div>
					<div class="tbl-cell department-detail">
						<a>Gynaecology</a>
						<p class="paragraph-small paragraph-white">Obstetrics and Gynaecology (often abbreviated to OB/GYN, OBG, O&amp;G or Obs &amp; Gynae) are the two surgical specialties dealing with the female reproductive organs, and as such are often combined to form a single medical specialty and postgraduate training program.</p>
					</div>
				</div>
								<div class="department-block animated animated-up">
					<div class="tbl-cell department-icon"><i class="fa fa-thermometer"></i></div>
					<div class="tbl-cell department-detail">
						<a>Orthology</a>
						<p class="paragraph-small paragraph-white">Orthology is the study of the right use of words in language. The word comes from Greek ortho- ("correct") and -logy ("science of"). This science is a place where psychology, philosophy, linguistics, and many other fields of learning come together.</p>
					</div>
				</div>
								<div class="department-block animated animated-up">
					<div class="tbl-cell department-icon"><i class="fa fa-stethoscope"></i></div>
					<div class="tbl-cell department-detail">
						<a>Dermatologist</a>
						<p class="paragraph-small paragraph-white">Dermatology is the branch of medicine dealing with the skin, nails, hair and its diseases. It is a specialty with both medical and surgical aspects. A dermatologist treats diseases, in the widest sense, and some csasdsadosmetic problems of the skin, scalp, hair, and nails.</p>
					</div>
				</div>
								<div class="department-block animated animated-up">
					<div class="tbl-cell department-icon"><i class="fa fa-bed"></i></div>
					<div class="tbl-cell department-detail">
						<a>Anaesthesia</a>
						<p class="paragraph-small paragraph-white">As anesthesiologists we are responsible for the safety and well-being of patients before, during and after surgery. This includes placing patients in a state of controlled unconsciousness called â€œgeneral anesthesiaâ€, the provision of â€œregional anestheticsâ€ where only a portion of the body is made numb, or administering â€˜sedationâ€™ when indicated for the relief of pain or anxiety.asdadasdsad</p>
					</div>
				</div>
								<div class="department-block animated animated-up">
					<div class="tbl-cell department-icon"><i class="fa fa-eye"></i></div>
					<div class="tbl-cell department-detail">
						<a>Ayurvedic</a>
						<p class="paragraph-small paragraph-white">Another milestone to achieve Holistic Health is the addendum of Ayurvedic Clinic at our clinic. The first school of medicine dating back to the origin of life itself, makes a come back with all its glory in the 21st century. With the west aping the east on eternal truths and knowledge of life, we need to refresh our old science of sages according to modern ages.</p>
					</div>
				</div>
								<div class="department-block animated animated-up">
					<div class="tbl-cell department-icon"><i class="fa fa-glass"></i></div>
					<div class="tbl-cell department-detail">
						<a>Pathology</a>
						<p class="paragraph-small paragraph-white">The modern practice of pathology is divided into a number of subdisciplines within the discrete but deeply interconnected aims of biological research and medical practice. Biomedical research into disease incorporates the work of vast variety of life science specialists, whereas, in most parts of the world, to be licensed to practice pathology as medical specialty, one has to complete medical school and secure a license to practice medicine.</p>
					</div>
				</div>
							</div>
		</div>
	</div>
</div><!-- End Department List Section -->

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
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/material.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.flexslider.min.js"></script>
	<script src="js/mdl-selectfield.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/datatables.min.js"></script>
	<script src="js/jquery-scrolltofixed.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/smoothscroll.min.js"></script>
	<script src="js/custom.js"></script>
	<script>$('#menu-doctor').addClass('active');</script>	<!-- Custom Css -->
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