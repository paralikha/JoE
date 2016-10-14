<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Blanket
 * @since Blanket 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text hidden-xs-up" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<section id="about_us">
        <nav id="nav_collapse" class="navbar navbar-light bg-faded">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <img src="resources/images/brand_logo.png"  width="130" alt="">
            <div class="collapse" id="exCollapsingNavbar">
                <div class="bg-inverse p-a-1">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="programs.html">Programme</a></li>
                        <li><a href="schedule.html">Schedule</a></li>
                        <li><a href="news_events.html">News &amp; Events</a></li>
                        <li><a href="contact.html">Contacts</a></li>
                        <li><a href="registration.html">Let's Joe</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="nav_header">
            <div class="width1200">
                <nav>
                    <button class="navbar-toggler hidden-sm-up pull-xs-right" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">☰</button>
                    <a class="navbar-brand" href="#"><img src="resources/images/brand_logo.png" alt=""></a>
                    <div class="collapse navbar-toggleable-xs" id="navbar-header">
                        <ul class="nav navbar-nav pull-xs-right">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" role="button" href="about.html">About Us</a>
                                <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop2">
                                    <li class="nav-item">
                                        <div class="nav-menu-links nav-link">
                                            <ul>
                                                <li><a href="#">Ceo's MEssage</a></li>
                                                <li><a href="#">Vision &amp; Mission</a></li>
                                                <li><a href="#">Our Personality</a></li>
                                                <li><a href="#">Our Centres</a></li>
                                                <li><a href="#">Our Intructors</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="center nav-link">
                                            <p>Ceo's Message</p>
                                            <img src="resources/images/ceo.png" width="100" alt="">
                                            <p>Mr.Suhaimi Salleh</p>
                                        </div>
                                    </li>
                                    <li class="nav-item width280">
                                        <div class="nav-link">
                                            <p>“Apart from financial literacy, it is also an important responsibility for parents to help their children grow emotionally and socially. We are certain that every single one of them has the ability and the potential to add value to the lives of others, in one way or another by being civil and responsible citizens of the world…”
                                            </p>
                                            <a class="float-r" href="#">read more..</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" role="button" href="programs.html">Programmes</a>
                                <ul id="menu2" class="center dropdown-menu" role="menu" aria-labelledby="drop2">
                                    <li class="nav-item">
                                        <a href="#">
                                            <img src="resources/images/jhb/jhb_1.png" alt="">
                                            <p>JOE HOLIDAY <br>BOOTCAMP</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">
                                            <img src="resources/images/jhb/jhb_2.png" alt="">
                                            <p>JOE FAST TRACK</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">
                                            <img src="resources/images/jhb/jhb_3.png" alt="">
                                            <p>JOE@SCHOOL <br>(coming soon)</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="schedule.html">Schedule</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news_events.html">News &amp; Events </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <li class="-bg_yellow nav-item">
                                <a class="nav-link" href="registration.html">Let's Joe!</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="intro_slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <img class="animated bounceInLeft" src="resources/images/r.png" alt="">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="carousel_animate animated bounceInRight">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <p><i class="fa fa-quote-left" aria-hidden="true"></i> During the Journey of Entrepreneurship Bootcamp, I really enjoyed myself and learnt a lot about businesses. There were a lot of fun activities and the trainer was really engaging.
                                                <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                                                <p class="float-r">- Nurul Huda, 9 years old</p>
                                            </div>

                                            <div class="carousel-item">
                                                <p><i class="fa fa-quote-left" aria-hidden="true"></i> The activities were an eye-opener for my child. She was exposed to new ways of solving problems and learnt how to work in groups.
                                                <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                                                <p class="float-r">- Guardian of Shakirah, 10 years old</p>
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="icon-prev" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="icon-next" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about_box home">
                    <div class="row">
                        <div class="col-md-3 hero_image">
                            <div class="hero_box gray">
                                <p>“Apart from financial literacy, it is also an important responsibility for parents to help their children grow emotionally and socially. We are certain that every single ”</p>
                                <p class="primary"><strong>-CEO's Message</strong></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="hero_box center yellow">
                                <h2>Who said <span>adults</span> <br> only can be <br> entrepreneurs?</h2>
                                <h2 class="second -bg_violet">Your child could be the next <br> Mark Zuckerberg.</h2>
                                <div class="clear"></div>
                                <h2 class="third -bg_white">Enrol now!</h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="hero_box transform no_pattern">
                                <h2 class="transform">JOE is a holistic <br> <span>4-phased</span> programme designed for tweens and teen-agers.</h2>
                                <a class="float-r" href="#">Learn more</a>
                            </div>
                        </div>
                    </div>


                    <div class="clear"></div>
                    <div class="gray">
                        <div class="row">
                            <div class="hero_bottom">
                                <div class="col-md-5">
                                    <img src="resources/images/hero_img.jpg" alt="">
                                    <a href="news_events.html">See more photos</a>
                                </div>
                                <div class="col-md-7">
                                    <div class="hero_text">
                                        <h1 class="dark_gray">Launch your child's <span class="primary">entrepreneurship</span> journey now!</h1>
                                        <img src="resources/images/rocket_2.png" alt="rocket_2">
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					twentyfifteen_the_custom_logo();

					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
