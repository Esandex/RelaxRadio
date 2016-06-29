<?include "inc/config.php";?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
	<title>Relax Radio - Peru - USA - world</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Radio Especializada a recordarte que tienes que vivir la VIDA <3 comparte">
		<meta name="keywords" content="Electro , Peru, Usa, Tomorrowland , Tomorrowwolrd">

	<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style.css" id="dark" media="screen" />
		<link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="styles/icons/icons.css" media="screen" />
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="js/player.css">
	<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/icons/font-awesome-ie7.min.css" />
	<![endif]-->
	<script src="/audiojs/audio.min.js"></script>
	<script> audiojs.events.ready(function(){ var as = audiojs.createAll(); }); </script> 
</head>
<body width=100% height=100%  id="fluidGridSystem" class="modern">
<!-- popup login -->
	<div id="popupLogin">
		<div class="def-block widget">
			<h4> Sign In </h4><span class="liner"></span>
			<div class="widget-content row-fluid">
				<form id="popup_login_form">
					<input type="text" name="login_username" id="login_username" onfocus="if (this.value=='username') this.value = '';" onblur="if (this.value=='') this.value = 'username';" value="usuario" placeholder="username">
					<input type="password" name="login_password" id="login_password" onfocus="if (this.value=='password') this.value = '';" onblur="if (this.value=='') this.value = 'password';" value="password" placeholder="password">
					<a href="#" class="tbutton small"><span>Ingresar</span></a>
					<a href="#" class="tbutton color2 small"><span>Register</span></a>
				</form><!-- login form -->
			</div><!-- content -->
		</div><!-- widget -->
		<div id="popupLoginClose">x</div>
	</div><!-- popup login -->
	<div id="LoginBackgroundPopup"></div>
			<!-- popup login -->
			<header id="header" class="glue">
			<!--<audio src="http://198.100.152.234:8000/;" preload="none"></audio>-->
				<div class="row clearfix">
					<div class="little-head lefter">
						<div id="Login_PopUp_Link" class="sign-btn tbutton small"><span>Ingresa</span></div>

						<div class="social social-head">
							<a href="http://twitter.com/behzadg1" class="bottomtip" title="Follow us on Twitter" target="_blank"><i class="icon-twitter"></i></a>
							<a href="http://fb.com/theme20" class="bottomtip" title="Like us on Facebook" target="_blank"><i class="icon-facebook"></i></a>
							<a href="https://plus.google.com/u/0/104807493509867599773" class="bottomtip" title="GooglePlus" target="_blank"><i class="icon-google-plus"></i></a>
							<a href="http://instagram.com/" class="bottomtip" title="instagram" target="_blank"><i class="icon-instagram"></i></a>
							<a href="https://soundcloud.com/behzad-gh" class="bottomtip" title="Soundcloud" target="_blank"><i class="icon-cloud"></i></a>
							<a href="http://youtube.com/" class="bottomtip" target="_blank" title="YouTube"><i class="icon-youtube-play"></i></a>
						</div><!-- end social -->

						<div class="search">
							<form action="search.html" id="search" method="get">
								<input id="inputhead" name="search" type="text" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ...">
								<button type="submit"><i class="icon-search"></i></button>
							</form><!-- end form -->
						</div><!-- search -->
					</div><!-- little head -->
				</div><!-- row -->

				<div class="headdown">
					<div class="row clearfix">
						<div class="logo bottomtip" title="Uniendo Peruanos y HISPANOS en USA.">
							<a href="index.html"><img src="images/logo.png" alt="Uniendo Peruanos y HISPANOS en USA."></a>
						</div><!-- end logo -->

						<nav>
							<ul class="sf-menu">
								<li class="current selectedLava">
									<a href="index.html">Inicio<span class="sub">Inicio Total</span></a>
									<ul>
										
									</ul>
								</li>
								<li>
									<a href="index.html">Nosotros<span class="sub">Conócenos</span></a>
									<ul>
										<li><a href="#">Quienes somos</a></li>
										<li><a href="shop.html">Metas</a></li>
										<li><a href="shop.html">Staff</a></li>
											
									
									</ul>
								</li>
								<li><a href="mp3s.html">Galeria<span class="sub">Videos/Fotos</span></a>
								<ul>
										<li><a href="#">Videos</a>
											
										</li>
										<li><a href="shop.html">Fotos</a>
											
									
									</ul></li>
								<li><a href="videos.html">Comparte<span class="sub">Cosas Para Compartir</span></a></li>
								<li><a href="gallery4.html">Eventos<span class="sub">Cruzando Fronteras</span></a>
									<ul>
										<li><a href="gallery4.html">Pasados</a></li>
										<li><a href="gallery3.html">Futuros</a></li>
										<li><a href="gallery2.html">Reuniones</a></li>
									</ul>
								</li>
								<li><a href="#">Gracias AH<span class="sub">Nuestros Amigos</span></a>
									<ul>
										<li><a href="rtl.html">Creative PMG</a></li>
										<li><a href="events.html">Esandex</a></li>
										<li><a href="mp3_single_wide.html">Vacio</a></li>
										<li><a href="mp3_single_half.html">Vacio</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contacto<span class="sub">Salúdanos y Únete</span></a>

								</li>
							</ul><!-- end menu -->
						</nav><!-- end nav -->
					</div><!-- row -->
				</div><!-- headdown -->
			</header><!-- end header -->

			<!-- Start Revolution Slider -->
				<div class="sliderr">
					<div class="tp-banner-container">
						<div class="tp-banner" >
							<ul>
								<!-- SLIDE  -->
								<li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
									<!-- MAIN IMAGE -->
									<img src="images/slides/slider1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
									<!-- LAYERS -->
									<div class="tp-caption fade"
										data-x="566"
										data-y="306"
										data-hoffset="0"
										data-speed="700"
										data-start="800"
										data-easing="Back.easeInOut"
										data-endspeed="300"
										style="z-index: 11"><img src="images/slides/slide1-cap1.png" alt=""></div> 
		
									<div class="tp-caption lfb"
										data-x="566"
										data-y="305"
										data-hoffset="0"
										data-speed="700"
										data-start="1200"
										data-easing="Back.easeInOut"
										data-endspeed="300"
										style="z-index: 11"><img src="images/slides/slide1-cap2.png" alt=""></div>
		
									<div class="tp-caption lft"
										data-x="741"
										data-y="305"
										data-hoffset="0"
										data-speed="700"
										data-start="1200"
										data-easing="Back.easeInOut"
										data-endspeed="300"
										style="z-index: 11"><img src="images/slides/slide1-cap3.png" alt=""></div>
		
									<div class="tp-caption lfb"
										data-x="711"
										data-y="374"
										data-hoffset="0"
										data-speed="700"
										data-start="2000"
										data-easing="Back.easeInOut"
										data-endspeed="300"
										style="z-index: 11"><img src="images/slides/slide1-cap4.png" alt=""></div>
		
									<div class="tp-caption lft"
										data-x="714"
										data-y="374"
										data-hoffset="0"
										data-speed="700"
										data-start="2000"
										data-easing="Back.easeInOut"
										data-endspeed="300"
										style="z-index: 11"><img src="images/slides/slide1-cap5.png" alt=""></div>
								</li>
		
								<!-- SLIDE  -->
								<li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
									<!-- MAIN IMAGE -->
									<img src="images/slides/slider9.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
									<!-- LAYERS -->
									<div class="tp-caption modern_big_bluebg randomrotate"
										data-x="603"
										data-y="384"
										data-hoffset="0"
										data-speed="700"
										data-start="1200"
										data-easing="Back.easeInOut"
										data-endspeed="300"
										style="z-index: 11">Y si Luchas, </div>
		
									<div class="tp-caption modern_big_redbg randomrotate"
										data-x="701"
										data-y="328"
										data-hoffset="0"
										data-speed="700"
										data-start="1700"
										data-easing="Back.easeInOut"
										data-endspeed="300"
										style="z-index: 11">Jamas Pierdas La FÉ ♫ ♫</div>
								</li>
		
								<!-- SLIDE  -->
								<li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
									<!-- MAIN IMAGE -->
									<img src="images/slides/slider3.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
									<!-- LAYERS -->
									<div class="tp-caption modern_big_redbg randomrotate"
										data-x="560"
										data-y="253"
										data-hoffset="0"
										data-speed="700"
										data-start="1000"
										data-easing="Back.easeInOut"
										data-endspeed="300"
										style="z-index: 11">La distancia</div>
		
									<div class="tp-caption modern_m_bluebg randomrotate"
										data-x="560"
										data-y="310"
										data-hoffset="0"
										data-speed="700"
										data-start="1500"
										data-easing="Back.easeInOut"
										data-endspeed="300"
										style="z-index: 11">Si hay amor a la patria</div>
		
									<div class="tp-caption modern_m_bluebg randomrotate"
										data-x="560"
										data-y="355"
										data-hoffset="0"
										data-speed="700"
										data-start="2000"
										data-easing="Back.easeInOut"
										data-endspeed="300"
										style="z-index: 11">Llevaremos la Bandera</div>
		
									<div class="tp-caption modern_m_bluebg randomrotate"
										data-x="560"
										data-y="400"
										data-hoffset="0"
										data-speed="700"
										data-start="2500"
										data-easing="Back.easeInOut"
										data-endspeed="300"
										style="z-index: 11">Siempre Con Orgullo </div>
		
									<div class="tp-caption modern_m_bluebg randomrotate"
										data-x="560"
										data-y="445"
										data-hoffset="0"
										data-speed="700"
										data-start="3000"
										data-easing="Back.easeInOut"
										data-endspeed="300"
										style="z-index: 11">Sin Olvidar que somos  PERÚ</div>
								</li>

							</ul><!-- End Slides -->
							<div class="tp-bannertimer"></div>										
						</div>					
					</div>
				</div>
			<!-- End Revolution Slider -->

			<div class="page-content">
				<div class="row clearfix mbf">
					<div class="music-player-list"></div>
				</div><!-- row music player -->

				<div class="row clearfix mbf">
					<div class="def-block animtt" data-gen="fadeUp" style="opacity:0;">
						<h4> Nuestro Staff</h4><span class="liner"></span>

						<div class="video-grid clearfix">
							<div class="mp3-carousel">
								<div class="anyClass">
									<ul class="tab-content-items">
											<li>
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/staff/phillipmg.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">DJ Phillip MG</a></h3>
												<span> Delaware - Usa </span>
												<span> @filimg017 </span>
											</li>
											<li>
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/staff/clex.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">Giancarlo Alvarez</a></h3>
												<span> Trujillo - Peru </span>
												<span> @Cleexdj </span>
											</li>
											<li>
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/staff/andresvize.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">Andres Vize</a></h3>
												<span> Santiago - Chile </span>
												<span> @AndresVise </span>
											</li>
											<li>
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/staff/viper.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">DJ VIPER </a></h3>
												<span> Lima - Peru </span>
												<span> @djviper </span>
											</li>
											
											<li>
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/staff/phillipmg.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">DJ Phillip MG</a></h3>
												<span> Delaware - Usa </span>
												<span> @filimg017 </span>
											</li>
											<li>
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/staff/clex.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">Giancarlo Alvarez</a></h3>
												<span> Trujillo - Peru </span>
												<span> @Cleexdj </span>
											</li>
											<li>
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/staff/andresvize.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">Andres Vize</a></h3>
												<span> Santiago - Chile </span>
												<span> @AndresVise </span>
											</li>
											<li>
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/staff/viper.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">DJ VIPER </a></h3>
												<span> Lima - Peru </span>
												<span> @djviper </span>
											</li>
									</ul>
								</div><!-- anyclass -->

								<div class="preve"><i class="icon-angle-left"></i></div><!-- carousel left -->
								<div class="nexte"><i class="icon-angle-right"></i></div><!-- carousel right -->

							</div><!-- carousel -->
						</div><!-- mp3s -->
					</div><!-- block -->
				</div><!-- row mp3s jcarousel -->

				<div class="row row-fluid clearfix mbf">
					<div class="span8">
						<div class="def-block">
							<h4> ULTIMAS NOTICIAS </h4><span class="liner"></span>

							<div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
								<div class="span5"><img class="four-radius" src="images/assets/news1.jpg" alt="#"></div>
								<div class="span7">
									<h3 class="news-title"> <a href="news_single.html">Australia’s 2014 Soundwave Festival</a> </h3>
									<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
									<div class="meta">
										<span> <i class="icon-time mi"></i>August 26, 2013 5:09 AM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 14</a> </span>
									</div><!-- meta -->
									<a href="news_single.html" class="sign-btn tbutton small"><span>Read More</span></a>
								</div><!-- span7 -->
							</div><!-- news -->

							<div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
								<div class="span5"><img class="four-radius" src="images/assets/news2.jpg" alt="#"></div>
								<div class="span7">
									<h3 class="news-title"> <a href="news_single.html">MTV Video Music Awards 2013</a> </h3>
									<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
									<div class="meta">
										<span> <i class="icon-time mi"></i>August 24, 2013 8:10 PM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 5</a> </span>
									</div><!-- meta -->
									<a href="news_single.html" class="sign-btn tbutton small"><span>Read More</span></a>
								</div><!-- span7 -->
							</div><!-- news -->

							<div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
								<div class="span5"><img class="four-radius" src="images/assets/news3.jpg" alt="#"></div>
								<div class="span7">
									<h3 class="news-title"> <a href="news_single.html">VMAs With A Round Of 'Applause'</a> </h3>
									<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
									<div class="meta">
										<span> <i class="icon-time mi"></i>August 20, 2013 2:00 AM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 27</a> </span>
									</div><!-- meta -->
									<a href="news_single.html" class="tbutton small"><span>Read More</span></a>
								</div><!-- span7 -->
							</div><!-- news -->

							<div class="load-news tac"><a href="#" class="tbutton small"><span>Load More</span></a></div>
						</div><!-- def block -->
					</div><!-- span8 news -->

					<div class="span4">
						<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
							<h4> Eventos </h4><span class="liner"></span>
							<div class="widget-content row-fluid">
								<div class="span12 mb">
									<ul id="event1" class="event-timer">
										<li>
											<span class="days">00</span>
											<p class="timeRefDays">dias</p>
										</li>
										<li>
											<span class="hours">00</span>
											<p class="timeRefHours">horas</p>
										</li>
										<li>
											<span class="minutes">00</span>
											<p class="timeRefMinutes">min</p>
										</li>
										<li>
											<span class="seconds">00</span>
											<p class="timeRefSeconds">sec</p>
										</li>
									</ul> <!-- end timer -->
								</div><!-- timer -->

								<div class="grid_8">
									<p class="event-titlett">Electric Zoo Festival en NEW YORK</p>
								</div>
								<div class="grid_4">
									<a href="http://electriczoofestival.com/tickets/" class="tbutton buy-ticket small" target="_blank"><span>Comprar</span></a>
								</div>

							</div><!-- widget content -->
						</div><!-- def block widget events -->

						<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
							<h4> Featured Videos </h4><span class="liner"></span>
							<div class="widget-content row-fluid">
								<div class="videos clearfix flexslider">
									<ul class="slides">
										<li class="featured-video">
											<a href="video_single_wide.html">
												<img src="images/assets/video1.jpg" alt="#">
												<i class="icon-play-sign"></i>
												<h3>I Know You Want Me</h3>
												<span>Fitbull</span>
											</a>
										</li><!-- slide -->
										<li class="featured-video">
											<a href="video_single_wide.html">
												<img src="images/assets/video2.jpg" alt="#">
												<i class="icon-play-sign"></i>
												<h3>I Like It</h3>
												<span>Enrique</span>
											</a>
										</li><!-- slide -->
										<li class="featured-video">
											<a href="video_single_wide.html">
												<img src="images/assets/video3.jpg" alt="#">
												<i class="icon-play-sign"></i>
												<h3>Tommorow</h3>
												<span>Dj Michele</span>
											</a>
										</li><!-- slide -->
									</ul>
								</div>
							</div><!-- widget content -->
						</div><!-- def block widget videos -->

						<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
							<h4> Popular Tracks </h4><span class="liner"></span>
							<div class="widget-content row-fluid">
								<div class="scroll-mp3" style="height: 220px;">
									<div class="content">
										<ul class="tab-content-items">
											<li class="clearfix">
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-1.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">Don’t go mary ( Remix )</a></h3>
												<span> Alexander </span>
												<span> 1,892,250 Plays </span>
											</li>
											<li class="clearfix">
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-2.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">That's My Kind Of Night </a></h3>
												<span> Alexander Mikoole </span>
												<span> 998,879 Plays </span>
											</li>
											<li class="clearfix">
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-3.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">Magna Carta... Holy Grail </a></h3>
												<span> Joe </span>
												<span> 792,240 Plays </span>
											</li>
											<li class="clearfix">
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-4.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">If you love me</a></h3>
												<span> Enrique </span>
												<span> 788,471 Plays </span>
											</li>
											<li class="clearfix">
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-5.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">Burning For you</a></h3>
												<span> Lura </span>
												<span> 710,105 Plays </span>
											</li>
											<li class="clearfix">
												<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-6.jpg" alt="#"></a>
												<h3><a href="mp3_single_half.html">Skyfool ( Dubstep Remix )</a></h3>
												<span> Babel </span>
												<span> 611,748 Plays </span>
											</li>
										</ul>
									</div>
								</div>
							</div><!-- widget content -->
						</div><!-- def block widget popular items -->

					</div><!-- span4 sidebar -->
				</div><!-- row clearfix -->

			</div><!-- end page content -->

			<footer id="footer">
				<div class="footer-first">
					<div class="row clearfix">
						<div class="grid_4">
							<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0">
								<h4> Top Video </h4><span class="liner"></span>
								<div class="widget-content">
								       <!-- video --><iframe src="http://player.vimeo.com/video/37999139?title=0&amp;byline=0&amp;portrait=0" width="100%" height="185" frameborder="0"></iframe>
								</div><!-- widget content -->
							</div><!-- block -->
						</div><!-- widget -->

						<div class="grid_4">
							<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0">
								<h4> Latest Tweets </h4><span class="liner"></span>
								<div class="widget-content">
									<div class="tweet"></div>
								</div><!-- widget content -->
							</div><!-- block -->
						</div><!-- widget -->

						<div class="grid_4">
							<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0">
								<h4> FOTOS  </h4><span class="liner"></span>
								<div class="widget-content">
									<ul id="flickr-photos" class="flickr-photos clearfix"></ul>
								</div><!-- widget content -->
							</div><!-- block -->
						</div><!-- widget -->
					</div><!-- row -->
				</div><!-- end first -->

				<div class="footer-last">
					<div class="row clearfix">
						<span class="copyright">© 2016 by <a href="http://phillipmg.com/">Phillip MG</a>. All Rights Reserved. Powered by <a href="http://creativepmg.com/">Creative PMG</a>.</span>
						<div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->
						<div class="foot-menu">
							<ul>
								<li><a href="index.html">INICIO</a></li>
								<li><a href="mp3s.html">NOSOTROS</a></li>
								<li><a href="videos.html">GALERIA</a></li>
								<li><a href="gallery.html">COMPARTE</a></li>
								<li><a href="blog.html">EVENTOS</a></li>
								<li><a href="contact.html">GRACIAS AH</a></li>
								<li><a href="contact.html">CONTACTO</a></li>
							</ul><!-- end links -->
						</div><!-- end foot menu -->
					</div><!-- row -->
				</div><!-- end last -->

			</footer><!-- end footer -->

		</div><!-- end layout -->
	</div>
	<center>
	    <div id=art class=albumart>
	        <img src="" name="nowplayingimage">
	    </div>
	    <div id="uniquePlayer-5" class="webPlayer light audioPlayer">
	        <div id="uniqueContainer-5" class="videoPlayer"></div>
	        <div style="display:none;" class="playerData">
				{
				"autoplay": "true",
				"size": { "width": "<? echo $player_size_width; ?>" },
				"media": {
				"m4a": "http://<? echo $radio_ip; ?>:<? echo $radio_port; ?>/;"
				}
				}
	        </div>
	    </div>
	</center>
<!-- Scripts -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/theme20.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>	
	<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.jplayer.js"></script>
	<script type="text/javascript" src="js/system.js"></script>
	<script type="text/javascript" src="js/countdown.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript">	
	/* <![CDATA[ */
		jQuery(document).ready(function() {
			jQuery('.tp-banner').revolution({
				delay:9000,
				startwidth:1060,
				startheight:610,
				hideThumbs:10,
				navigationType:"off",
				fullWidth:"on",
				forceFullWidth:"on"
			});
			jQuery("#event1").countdown({
				date: "02 september 2016 13:00:00",
				format: "on"
			},
			function() {
				// callback function
			});
		});
	/* ]]> */
	</script>
	<script type="text/javascript">
    $(document).ready(function(){
        $(document).find('.webPlayer').each(function() { $('#'+this.id).videoPlayer(); });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
//********* songname is a div set to the player, in js/system.js line 27. #artist and #trackname comes from get_info.php *********//
        function songtitle() {
            $.get("inc/get_info.php",{} ,function(data){ $("#songname").html(data); $('#songname').fadeIn("fast");
                var artist = $('#artist').val();
                var track = $('#trackname').val();
                artist= artist,
                track= track
                $.ajax({
                    url: '<? if($show_album_art == 'on' && $show_song_title == 'on') { echo 'http://itunes.apple.com/search'; } ?>',
                    data: {
                    term: artist + ' ' + track,
                    media: 'music'
                    },
                    dataType: 'jsonp',
                    success: function(json) {
                        if(json.results.length === 0) {
                            $('img[name="nowplayingimage"]').attr('src', '');
                            return;
                        }

                        // trust the first result blindly...
                        var artworkURL = json.results[0].artworkUrl100;
                        $('img[name="nowplayingimage"]').attr('src', artworkURL);
                    }   
                });
            });


            setInterval(songtitle, <? echo 1000 * 60 * $song_title_update; ?>);
        } // Song title function
        songtitle();

        $("#songname").css({"color":"<? echo $song_title_color; ?>"});
        $("#songname").css({"width":"<? echo $song_title_width; ?>"});
        $("#uniquePlayer-5").css({"background":"<? echo $player_background_color; ?>"});
        $("#art").css({"background":"<? echo $player_background_color; ?>"});
    });
</script>
</body>
</html>