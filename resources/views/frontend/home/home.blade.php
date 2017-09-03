<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <title>Wiploo</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/bootstrap.min.css') }}">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/ionicons.min.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/animate.css') }}">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/slider.css') }}">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/jquery.fancybox.css') }}">
        <!-- template main css file -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/main.css') }}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/responsive.css') }}">
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="{{ asset('assets/frontend/assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
        <!-- jquery -->
        <script src="{{ asset('assets/frontend/assets/jquery.min.js') }}"></script>
        <!-- owl carouserl js -->
        <script src="{{ asset('assets/frontend/assets/js/owl.carousel.min.js') }}"></script>
        <!-- bootstrap js -->

        <script src="{{ asset('assets/frontend/assets/js/bootstrap.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('assets/frontend/assets/js/wow.min.js') }}"></script>
        <!-- slider js -->
        <script src="{{ asset('assets/frontend/assets/js/slider.js') }}"></script>
        <script src="{{ asset('assets/frontend/assets/js/jquery.fancybox.js') }}"></script>
        <!-- template main js -->
        <script src="{{ asset('assets/frontend/assets/js/main.js') }}"></script>
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="">
            <div class="container top-bar-container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.php" >
                            <img src="{{ asset('assets/frontend/assets/images/logo.png')}}" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-left" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.php" >Home</a>
                            </li>
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Article <span class="caret"></span></a>              
                                 <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="blog-index.php">Blog index</a></li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Video <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="blog-video.php">Video Index</a></li>
                                        
                                    </ul>
                                </div>  
                            </li>
                            <li><a class="red-color" href="#">Popular</a></li>
                            <li><a href="#">Community</a></li>
                            <li class="padding-left-20"><a href="admin" class="blue-bg round-btn btn">Tulis Artikel</a></li>
                            <li id="search-btn"><a class="ion-ios-search" href="#"></a></li>
                            <li id="link-form-login" class="dropdown"><a class="ion-android-person" href="#"></a>
                                <div class="dropdown-menu">
                                    <form id="login" class="form-wrapper-index">
                                        <p><input type="email" placeholder="Your email" name="email-login" /></p>
                                        <p><input type="password" name="password-login" placeholder="Password"></p>
                                        <p><button name="submit">Login</button></p>
                                        <hr/>
                                        <p>Not registered yet?<a class="red-color" href="admin/index.php"> Signup Here</a></p>
                                    </form>
                                </div>
                            </li> 
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
                <!--search bar-->
                 <div id="top-search-bar" class="display-none">
                    <div class="input-group width-100">
                      <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
                      <span class="input-group-btn">
                        <button class="btn btn-default ion-ios-search" type="button"></button>
                      </span>
                    </div>
                </div>
            </div>
        </header>
        
        <section id="breaking-news-section">
            <div class="container ">
                <div class="col-md-2 red-bg">
                    <span class="section-title">Breaking News :</span>
                </div>
                <div class="col-md-10 slider-title-content">
                    <ul class="breaking-news-slider">
                        <li><a href="#">Breaking News Title Goes Here, if you want to read just click it</a></li>
                        <li><a href="#">Breaking News Title Goes Here, if you want to read just click it 2</a></li>
                        <li><a href="#">Breaking News Title Goes Here, if you want to read just click it 3</a></li>
                    </ul>
                </div>
            </div>
        </section>
		
		<!-- /slider -->
		<section id="main-slider-containers">
			<div class="container">
				<div class="top-banner vertical-padding">
					<div class="col-md-8 col-sm-8 no-padding">
						<div class="main-sliders">
							<div class="main-slider-container">
								<div class="main-slider-image">
									<img src="{{ asset('assets/frontend/assets/images/newslide.jpg')}}" class="width-100">
								</div>
								<div class="slider-title-container">
											<div class="slider-content">
												<p class="slider-date">Date, May 16th 2017</p>
												<a href="#"> <h2 class="slider-title">Slider News/Article Goes Title Here</h2></a>
											</div>
									
								</div>
							</div>
						</div>
				
					</div>
					<div class="col-md-4 col-sm-4 no-padding">
						<div class="main-sliders side-banner">
							<div class="main-slider-container">
								<div class="main-slider-image">
									<img src="{{ asset('assets/frontend/assets/images/sidebanner.jpg')}}" class="width-100">
								</div>
								<div class="slider-title-container">
									
											<div class="slider-content">
												<p class="slider-date">Date, May 16th 2017</p>
												<a href="#"> <h2 class="slider-title">Slider News/Article Goes Title Here</h2></a>
											</div>
										
								</div>
							</div>
						</div>
						<div class="main-sliders side-banner">
							<div class="main-slider-container">
								<div class="main-slider-image">
									<img src="{{ asset('assets/frontend/assets/images/sidebanner.jpg')}}" class="width-100">
								</div>
								<div class="slider-title-container">
							
									<div class="slider-content">
										<p class="slider-date">Date, May 16th 2017</p>
										<a href="#"> <h2 class="slider-title">Slider News/Article Goes Title Here</h2></a>
									</div>
										
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!--
		==================================================
		LAtest News Section Start
		================================================== -->
		<section id="main-content-containers" class="vertical-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9">

					<div class="row">
						<div class="col-md-12">
							<div class="section-title-container">
								<h4 class="section-title header-font">Latest</h4>
								<hr class="red-line-bg margin-left-10">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="news-container">
								<div class="news-image">
									<img src="{{ asset('assets/frontend/assets/images/dummy.jpg')}}" class="img-responsive width-100" alt="dummy news image">
								</div>
								<p class="news-date"> Date, May 06th 2017</p>
								<h3 class="news-title"><a href="single.php"> Dummy news title goes here </a></h3>
								<p class="news excerpt">Lorem ipsum dolor sit amet, dummy content will goes here, just read it and dont comment anything, it was just dummy</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="news-container">
								<div class="news-image">
									<img src="{{ asset('assets/frontend/assets/images/dummy.jpg')}}" class="img-responsive width-100" alt="dummy news image">
								</div>
								<p class="news-date"> Date, May 06th 2017</p>
								<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>
								<p class="news excerpt">Lorem ipsum dolor sit amet, dummy content will goes here, just read it and dont comment anything, it was just dummy</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="news-container">
								<div class="news-image">
									<img src="{{ asset('assets/frontend/assets/images/dummy.jpg')}}" class="img-responsive width-100" alt="dummy news image">
								</div>
								<p class="news-date"> Date, May 06th 2017</p>
								<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>
								<p class="news excerpt">Lorem ipsum dolor sit amet, dummy content will goes here, just read it and dont comment anything, it was just dummy</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="news-container">
								<div class="news-image">
									<img src="{{ asset('assets/frontend/assets/images/dummy.jpg')}}" class="img-responsive width-100" alt="dummy news image">
								</div>
								<p class="news-date"> Date, May 06th 2017</p>
								<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>
								<p class="news excerpt">Lorem ipsum dolor sit amet, dummy content will goes here, just read it and dont comment anything, it was just dummy</p>
							</div>
						</div>
					</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="right-sidebar-container">
							<div class="section-title-container">
								<h4 class="section-title header-font">Popular Post</h4>
								<hr class="red-line-bg margin-left-60">
							</div>
						</div>
						<!--loop start here-->
							<div class="news-container-sidebar">
								<div class="row">
									<div class="col-md-4">
										<div class="news-image">
											<img src="{{ asset('assets/frontend/assets/images/dummy.jpg')}}" class="img-responsive width-100" alt="dummy news image">
										</div>
									</div>
									<div class="col-md-8">
										<p class="news-date"> Date, May 06th 2017</p>
										<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>
										
									</div>
								</div>
							</div>
							<!--end-->
							<div class="news-container-sidebar">
								<div class="row">
									<div class="col-md-4">
										<div class="news-image">
											<img src="{{ asset('assets/frontend/assets/images/dummy.jpg')}}" class="img-responsive width-100" alt="dummy news image">
										</div>
									</div>
									<div class="col-md-8">
										<p class="news-date"> Date, May 06th 2017</p>
										<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>
										
									</div>
								</div>
							</div>
							<div class="news-container-sidebar">
								<div class="row">
									<div class="col-md-4">
										<div class="news-image">
											<img src="{{ asset('assets/frontend/assets/images/dummy.jpg')}}" class="img-responsive width-100" alt="dummy news image">
										</div>
									</div>
									<div class="col-md-8">
										<p class="news-date"> Date, May 06th 2017</p>
										<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>
										
									</div>
								</div>
							</div>
							<div class="news-container-sidebar">
								<div class="row">
									<div class="col-md-4">
										<div class="news-image">
											<img src="{{ asset('assets/frontend/assets/images/dummy.jpg')}}" class="img-responsive width-100" alt="dummy news image">
										</div>
									</div>
									<div class="col-md-8">
										<p class="news-date"> Date, May 06th 2017</p>
										<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>
										
									</div>
								</div>
							</div>
							<div class="news-container-sidebar">
								<div class="row">
									<div class="col-md-4">
										<div class="news-image">
											<img src="{{ asset('assets/frontend/assets/images/dummy.jpg')}}" class="img-responsive width-100" alt="dummy news image">
										</div>
									</div>
									<div class="col-md-8">
										<p class="news-date"> Date, May 06th 2017</p>
										<h3 class="news-title"><a href="#"> Dummy news title goes here </a></h3>
										
									</div>
								</div>
							</div>
						<div class="ads-banner-container width-100 vertical-padding">
							<a href="#"><img src="{{ asset('assets/frontend/assets/images/square-ads.jpg')}}" class="width-100" /></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--Vertical banner ads-->
		<div class="container">
			<div class="text-center">
				<div class="ads-banner-container width-100 ">
					<a href="#"><img src="{{ asset('assets/frontend/assets/images/horizontal-ads.jpg')}}" class="text-center" /></a>
				</div>
			</div>
		</div>
		<!--
		==================================================
	   Video and featured Section Start
		================================================== -->
	   <!-- /#feature & Video -->
		<section id="video-featured-container" class="vertical-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">

					<div class="row">
							<div class="col-md-12">
								<div class="section-title-container">
									<h4 class="center-section-title header-font">Video</h4>
									<hr class="center-red-line-bg">
								</div>
							</div>
						<div class="video-container vertical-padding">
							<div class="col-md-12">
								<div class="video-content width-100">
									<!--video code goes here-->
										<img src="{{ asset('assets/frontend/assets/images/video-dummy.jpg')}}" class="width-100">
									<!--end-->
									<div class="video-title-container">
										<p class="news-date"> Date, May 06th 2017</p>
										<h3 class="news-title font-size-16"><a href="#"> Dummy video title goes here </a></h3>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="video-content width-100">
									<!--video code goes here-->
										<img src="{{ asset('assets/frontend/assets/images/video-dummy.jpg')}}" class="width-100">
									<!--end-->
									<div class="video-title-container">
										<p class="news-date"> Date, May 06th 2017</p>
										<h3 class="news-title font-size-16"><a href="#"> Dummy video title goes here </a></h3>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="video-content width-100">
									<!--video code goes here-->
										<img src="{{ asset('assets/frontend/assets/images/video-dummy.jpg')}}" class="width-100">
									<!--end-->

									<div class="video-title-container">
										<p class="news-date"> Date, May 06th 2017</p>
										<h3 class="news-title font-size-16"><a href="#"> Dummy video title goes here </a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="col-md-6 col-sm-6">

					<div class="row">
						<div class="col-md-12">
							<div class="section-title-container">
								<h4 class="center-section-title header-font">Featured</h4>
								<hr class="center-red-line-bg">
							</div>
						</div>
						
						<div class="featured-news-container vertical-padding">
							<!--loop start here-->
							<div class="news-container">
								<div class="row">
									<div class="col-md-4">
										<div class="news-image">
											<img src="{{ asset('assets/frontend/assets/images/dummy-featured.jpg')}}" class="img-responsive width-100" alt="dummy news image">
										</div>
									</div>
									<div class="col-md-8">
										<p class="news-date"> Date, May 06th 2017</p>
										<h3 class="news-title font-size-16"><a href="#"> Dummy news title goes here </a></h3>
										<p class="news excerpt">Lorem ipsum dolor sit amet, dummy content will goes here, just read it and dont comment anything, it was just dummy</p>
									</div>
								</div>
							</div>
							<!--end-->
							<!--loop start here-->
							<div class="news-container">
								<div class="row">
									<div class="col-md-4">
										<div class="news-image">
											<img src="{{ asset('assets/frontend/assets/images/dummy-featured.jpg')}}" class="img-responsive width-100" alt="dummy news image">
										</div>
									</div>
									<div class="col-md-8">
										<p class="news-date"> Date, May 06th 2017</p>
										<h3 class="news-title font-size-16"><a href="#"> Dummy news title goes here </a></h3>
										<p class="news excerpt">Lorem ipsum dolor sit amet, dummy content will goes here, just read it and dont comment anything, it was just dummy</p>
									</div>
								</div>
							</div>
							<!--end-->
							<!--loop start here-->
							<div class="news-container">
								<div class="row">
									<div class="col-md-4">
										<div class="news-image">
											<img src="{{ asset('assets/frontend/assets/images/dummy-featured.jpg')}}" class="img-responsive width-100" alt="dummy news image">
										</div>
									</div>
									<div class="col-md-8">
										<p class="news-date"> Date, May 06th 2017</p>
										<h3 class="news-title font-size-16"><a href="#"> Dummy news title goes here </a></h3>
										<p class="news excerpt">Lorem ipsum dolor sit amet, dummy content will goes here, just read it and dont comment anything, it was just dummy</p>
									</div>
								</div>
							</div>
							<!--end-->
							
						</div>
					</div>
						
					</div>
				</div>
			</div>
		</section>  
		<!--
		==================================================
		Call To Action Section Start
		================================================== -->
		<section id="cta-container" class="vertical-padding dark-green-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="cta-headline text-center">Yuk langganan berita terbaru dari kami!</p>
					</div>
					<form id="cta-form" action="#">
						<div class="col-md-5 col-sm-5">
							<input type="name" name="name" placeholder="Your Name">
						</div>
						<div class="col-md-5 col-sm-5">
							<input type="email" name="email" placeholder="Your Email">
						</div>
						<div class="col-md-2 col-sm-2">
							<input type="submit" class="red-btn" />
						</div>
					</form>
				</div>
			</div>
		</section>
		
		<section id="pre-footer" class="vertical-padding dark-grey-bg">
			<div class="container">
				<div class="col-md-12">
					<ul class="pre-footer-links text-center">
						<li><a href="about-us.php">About Us</a></li>
						<li><a href="#">Terms And Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Career</a></li>
					</ul>
					<hr style="border-top:1px solid #ccc; width:50%;" />
				</div>

				<div class="col-md-12">
					<div id="socmed-list">
						<ul class="text-center">
							<li><a href="#" class="ion-social-facebook"></a></li>
							<li><a href="#" class="ion-social-twitter"></a></li>
							<li><a href="#" class="ion-social-instagram"></a></li>
							<li><a href="#" class="ion-social-youtube"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--
		==================================================
		Footer Section Start
		================================================== -->
		<footer id="footer" >
			<div class="container">
				<div class="col-md-12 text-center">
					<p class="copyright">Copyright: <span>Wiploo 2017</span></p>
				</div>
				
		</footer> <!-- /#footer -->
			
	</body>
</html>