<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="{{ asset('web/images/favicon.ico') }}"/>
		<title>GOJI bobice</title>

		<link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}" type="text/css" media="all"/>
		{{--<link rel="stylesheet" href="{{ asset('web/css/font-awesome.min.css') }}" type="text/css" media="all" />--}}
		<link rel="stylesheet" href="{{ asset('web/fontawesome/css/all.css') }}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{ asset('web/fontawesome/css/brands.css') }}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{ asset('web/css/ionicons.min.css') }}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{ asset('web/css/owl.carousel.css') }}" type="text/css" media="all"/>
		<link rel="stylesheet" href="{{ asset('web/css/owl.theme.css') }}" type="text/css" media="all"/>
		<link rel="stylesheet" href="{{ asset('web/css/settings.css') }}" type="text/css" media="all"/>
		<link rel='stylesheet' href="{{ asset('web/css/slick.css') }}" type='text/css' media='all'/>
		<link rel='stylesheet' href="{{ asset('web/css/prettyPhoto.css') }}" type='text/css' media='all'/>
		<link rel="stylesheet" href="{{ asset('web/css/style.css') }}" type="text/css" media="all"/>
		<link rel="stylesheet" href="{{ asset('web/css/custom.css') }}" type="text/css" media="all"/>
		<link href="//fonts.googleapis.com/css?family=Great+Vibes%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet"/>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-71281256-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-71281256-1');
        </script>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-TWMDXL6');</script>
        <!-- End Google Tag Manager -->
	</head>
	<body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWMDXL6"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
		<div class="noo-spinner">
			<div class="spinner">
				<div class="cube1"></div>
				<div class="cube2"></div>
			</div>
		</div>
		<div id="menu-slideout" class="slideout-menu hidden-md-up">
			<div class="mobile-menu">
				<ul id="mobile-menu" class="menu">
                    <li class="@if(Route::is('home') || Route::is('about') || Route::is('smoothie')) active @endif dropdown">
                        <a href="{{ route('home') }}">Početna</a>
                        <i class="sub-menu-toggle fa fa-angle-down"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ route('about') }}">O nama</a></li>
                            {{--<li><a href="{{ route('smoothie') }}">Smoothie Shop Niš</a></li>--}}
                            <li><a href="https://www.facebook.com/smoothieshopnis" target="_blank">Smoothie Shop Niš</a></li>
                        </ul>
                    </li>
                    <li class="@if(Route::is('gallery') || Route::is('goji.red') ||
										               Route::is('goji.black') || Route::is('planting') ||
										               Route::is('cultivation') || Route::is('protection') ||
										               Route::is('recipes') || Route::is('video')) active @endif dropdown">
                        <a href="#">Godži</a>
                        <i class="sub-menu-toggle fa fa-angle-down"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ route('goji.red') }}">CRVENI GODŽI</a></li>
                            <li><a href="{{ route('goji.black') }}">CRNI GODŽI</a></li>
                            <li><a href="{{ route('planting') }}">Sadnja</a></li>
                            <li><a href="{{ route('cultivation') }}">Plantažno gajenje</a></li>
                            <li><a href="{{ route('recipes') }}">Upotreba i recepti</a></li>
                            {{--<li><a href="{{ route('gallery') }}">Galerija</a></li>--}}
                            {{--<li><a href="{{ route('video') }}">Video</a></li>--}}
                        </ul>
                    </li>
                    <li class="@if(Route::is('cooperation')) active @endif">
                        <a href="{{ route('cooperation') }}">Kooperacija</a>
                    </li>
                    <li class="@if(Route::is('products')) active @endif">
                        <a href="{{ route('products') }}">Proizvodi</a>
                    </li>
                    {{--<li class="@if(Route::is('news')) active @endif">--}}
                        {{--<a href="{{ route('news') }}">Novosti</a>--}}
                    {{--</li>--}}
                    <li class="@if(Route::is('contact')) active @endif">
                        <a href="{{ route('contact') }}">Kontakt</a>
                    </li>
				</ul>
			</div>
		</div>
		<div class="site">
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							{{--<div class="topbar-menu">--}}
								{{--<ul class="topbar-menu">--}}
									{{--<li class="dropdown">--}}
										{{--<a href="#">Languages</a>--}}
										{{--<ul class="sub-menu">--}}
											{{--<li><a href="{{ route('locale', ['locale' => 'en']) }}">English</a></li>--}}
											{{--<li><a href="{{ route('locale', ['locale' => 'rs']) }}">Srpski</a></li>--}}
										{{--</ul>--}}
									{{--</li>--}}
								{{--</ul>--}}
							{{--</div>--}}
						</div>
						<div class="col-md-6">
							<div class="topbar-menu" style="text-align: right">
								<a class="pr-1" style="font-size: 20px;" href="https://www.facebook.com/gojiljubaisinovi/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a class="pr-1" style="font-size: 20px;" href="https://www.instagram.com/gojiberry_serbia/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
								<a class="pr-1" style="font-size: 20px;" href="https://www.youtube.com/user/nemcakole1/videos" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
							</div>
						</div>
                        {{--<div class="col-md-1"> </div>--}}
					</div>
				</div>
			</div>
			<header id="header" class="header header-desktop header-2">
				<div class="container">
					<div class="row">
						<div class="col-md-2" style="conten: left">
							<a href="{{ route('home') }}" id="logo">
								<img class="logo-image" src="{{ asset('web/images/app/logo.jpg') }}" alt="Organik Logo" />
							</a>
						</div>
						<div class="col-md-10">
							<div class="header-right">
								<nav class="menu">
									<ul class="main-menu">
										<li class="@if(Route::is('home') || Route::is('about') || Route::is('smoothie')) active @endif dropdown">
											<a href="{{ route('home') }}">Početna</a>
											<ul class="sub-menu">
												<li><a href="{{ route('about') }}">O nama</a></li>
												{{--<li><a href="{{ route('smoothie') }}">Smoothie Shop Niš</a></li>--}}
												<li><a href="https://www.facebook.com/smoothieshopnis" target="_blank">Smoothie Shop Niš</a></li>
											</ul>
										</li>
										<li class="@if(Route::is('gallery') || Route::is('goji.red') ||
										               Route::is('goji.black') || Route::is('planting') ||
										               Route::is('cultivation') || Route::is('protection') ||
										               Route::is('recipes') || Route::is('video')) active @endif dropdown">
											<a href="#">Godži</a>
											<ul class="sub-menu">
												<li><a href="{{ route('goji.red') }}">CRVENI GODŽI</a></li>
												<li><a href="{{ route('goji.black') }}">CRNI GODŽI</a></li>
												<li><a href="{{ route('planting') }}">Sadnja</a></li>
												<li><a href="{{ route('cultivation') }}">Plantažno gajenje</a></li>
												<li><a href="{{ route('recipes') }}">Upotreba i recepti</a></li>
												{{--<li><a href="{{ route('gallery') }}">Galerija</a></li>--}}
												{{--<li><a href="{{ route('video') }}">Video</a></li>--}}
											</ul>
										</li>
										<li class="@if(Route::is('cooperation')) active @endif">
											<a href="{{ route('cooperation') }}">Kooperacija</a>
										</li>
										<li class="@if(Route::is('products')) active @endif">
											<a href="{{ route('products') }}">Proizvodi</a>
										</li>
										{{--<li class="@if(Route::is('news')) active @endif">--}}
											{{--<a href="{{ route('news') }}">Novosti</a>--}}
										{{--</li>--}}
										<li class="@if(Route::is('contact')) active @endif">
											<a href="{{ route('contact') }}">Kontakt</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>
			<header class="header header-mobile">
				<div class="container">
					<div class="row">
						<div class="col-xs-3">
							<div class="header-left">
								<div id="open-left"><i class="ion-navicon"></i></div>
							</div>
						</div>
						<div class="col-xs-6" style="min-height: 50px; max-height: 75px">
							<div class="header-center">
								<a href="./" id="logo-2">
									<img class="logo-image" src="{{ asset('web/images/app/logo.jpg') }}" alt="Organik Logo" style="min-height: 50px; max-height: 75px"/>
								</a>
							</div>
						</div>
					</div>
				</div>
			</header>

			<!-- Main view  -->
			@yield('content')

			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<img src="{{ asset('web/images/app/footer_logo_goji.png') }}" class="footer-logo" alt="" />
							<p>
								Dobro došli u rasadnik i organsku plantažu godži bobica. Našom vizijom smo zaokružili projekat od formiranja plantaža do finalnih proizvoda sa najlekovitijim bobicama.
							</p>
							<div class="footer-social">
								<a style="font-size: 25px;" href="https://www.facebook.com/gojiljubaisinovi/" data-toggle="tooltip" data-placement="top" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a style="font-size: 25px;" href="https://www.instagram.com/gojiberry_serbia/" data-toggle="tooltip" data-placement="top" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
								<a style="font-size: 25px;" href="https://www.youtube.com/user/nemcakole1/videos" data-toggle="tooltip" data-placement="top" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Kontakt</h3>
                                <p>Radivoja Dinulovića 4 <br> Deveti Maj - Niš</p>
                                <p><a href="tel:00381184262990">+381 18 4262990</a><br><a href="tel:00381604262990">+381 60 4262990</a><br><a href="tel:00381616897824">+381 61 6897824</a></p>
                                <a href="mailto:sadnicegoji@gmail.com">sadnicegoji@gmail.com</a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="widget">
								<h5 class="widget-title">Lajkujte i pratite dešavanja na Facebook-u</h5><div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=1415208348777469';
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                <div class="fb-page" data-href="https://www.facebook.com/gojiljubaisinovi/" data-tabs="timeline"
                                     data-width="400" data-height="130" data-small-header="false" data-adapt-container-width="true"
                                     data-hide-cover="false" data-show-facepile="false">
                                    <blockquote cite="https://www.facebook.com/gojiljubaisinovi/" class="fb-xfbml-parse-ignore">
                                        <a href="https://www.facebook.com/gojiljubaisinovi/">GOJI bobice</a></blockquote></div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							Copyright © 2020 <a href="#">Goji - Ljuba i sinovi</a> - All Rights Reserved.
						</div>
					</div>
				</div>
				<div class="backtotop" id="backtotop"></div>
			</div>
		</div>

		<script type="text/javascript" src="{{ asset('web/js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/jquery-migrate.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/modernizr-2.7.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/jquery.countdown.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/imagesloaded.pkgd.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/isotope.pkgd.min.js') }}"></script>
		<script type='text/javascript' src="{{ asset('web/js/jquery.prettyPhoto.js') }}"></script>
		<script type='text/javascript' src="{{ asset('web/js/jquery.prettyPhoto.init.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/jquery.isotope.init.js') }}"></script>
		<script type='text/javascript' src="{{ asset('web/js/slick.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/script.js') }}"></script>

		<script type="text/javascript" src="{{ asset('web/js/jquery.themepunch.tools.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/jquery.themepunch.revolution.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/extensions/revolution.extension.video.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/extensions/revolution.extension.actions.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/extensions/revolution.extension.navigation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/extensions/revolution.extension.migration.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('web/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	</body>
</html>
