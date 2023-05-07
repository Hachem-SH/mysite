<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>
    <base href="{{URL::asset('/')}}" target="_top">



    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>




    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">





    <!-- bootstrap -->





    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/view-movie.css">





    <!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">





 <div id="app">




    <header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="index.html" class="header__logo">
								<img src="pictures/logo/logo.png" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">

                                    <a href="/" class="header__nav-link">Home</a>


								</li>
								<!-- end dropdown -->

								<!-- dropdown -->
								<li class="header__nav-item">

                                    <a href="/movies" class="header__nav-link">Movies</a>


								</li>
								<!-- end dropdown -->
                                <!-- dropdown -->
								<li class="header__nav-item">

                                    <a href="/series" class="header__nav-link">Series</a>


								</li>
								<!-- end dropdown -->
                                <!-- dropdown -->
								<li class="header__nav-item">

                                    <a href="/" class="header__nav-link">Anime</a>


								</li>
								<!-- end dropdown -->



							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">

                            </div>
                                @guest


                                @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>sign in</span>
								</a>


                            @endif
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="header__sign-in">
                                <i class="icon ion-ios-log-in"></i>
                                <span>Rgister</span>
                            </a>


                        @endif



                        @else




                                <div class="action">
                                    <div class="profile" onclick="menuToggle();">
                                        <img src="user.png" alt="">
                                    </div>

                                    <div class="menu">
                                        <h3>
                                            Welcome
                                            <div>
                                                {{ Auth::user()->name }}
                                            </div>
                                        </h3>
                                        <ul>
                                            @if (Auth::user()->is_admin=='1')


                                            <li>
                                                <span class="material-icons icons-size"></span>
                                                <a href="/dashboard">Dashboard</a>
                                            </li>
                                            @endif
                                            <li>
                                                <span class="material-icons icons-size"></span>
                                                <a href="#">My Profile</a>
                                            </li>


                                            <li>
                                                <span class="material-icons icons-size"></span>
                                                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Logout</a>
                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <script>
                                    function menuToggle(){
                                        const toggleMenu = document.querySelector('.menu');
                                        toggleMenu.classList.toggle('active')
                                    }
                                </script>




@endguest






							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->



        <main class="py-4">
            @yield('content')
        </main>

    </div>
    <script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/search.js"></script>
<script src="js/owl.carousel.min.js"></script>




<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- footer list -->
            <div class="col-12 col-md-3">
                <h6 class="footer__title">Download Our App</h6>
                <ul class="footer__app">
                    <li><a href="#"><img src="img/Download_on_the_App_Store_Badge.svg" alt=""></a></li>
                    <li><a href="#"><img src="img/google-play-badge.png" alt=""></a></li>
                </ul>
            </div>
            <!-- end footer list -->

            <!-- footer list -->
            <div class="col-6 col-sm-4 col-md-3">
                <h6 class="footer__title">Resources</h6>
                <ul class="footer__list">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Pricing Plan</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
            <!-- end footer list -->

            <!-- footer list -->
            <div class="col-6 col-sm-4 col-md-3">
                <h6 class="footer__title">Legal</h6>
                <ul class="footer__list">
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Security</a></li>
                </ul>
            </div>
            <!-- end footer list -->

            <!-- footer list -->
            <div class="col-12 col-sm-4 col-md-3">
                <h6 class="footer__title">Contact</h6>
                <ul class="footer__list">
                    <li><a href="tel:+18002345678">+1 (800) 234-5678</a></li>
                    <li><a href="mailto:support@moviego.com">support@flixgo.com</a></li>
                </ul>
                <ul class="footer__social">
                    <li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                    <li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                    <li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
                </ul>
            </div>
            <!-- end footer list -->

            <!-- footer copyright -->
            <div class="col-12">
                <div class="footer__copyright">
                    <small><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></small>

                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <!-- end footer copyright -->
        </div>
    </div>
</footer>
<!-- end footer -->



@yield('scripts')


<!-- JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.mCustomScrollbar.min.js"></script>
<script src="js/wNumb.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/plyr.min.js"></script>
<script src="js/jquery.morelines.min.js"></script>
<script src="js/photoswipe.min.js"></script>
<script src="js/photoswipe-ui-default.min.js"></script>
<script src="js/main.js"></script>
<script src="js/movies/view.js"></script>



</body>

</html>
