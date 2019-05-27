<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />

	<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">

	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Kumala Group</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder" style="font-size: 20px;"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="/" class="standard-logo" data-dark-logo="{{asset('images/logo-dark.png')}}"><img src="{{asset('images/logo/logo.png')}}" alt="Canvas Logo"></a>
						<div class="retina-logo">
							<a href="/" class="retina-logo" data-dark-logo="{{asset('images/logo-dark@2x.png')}}"><img src="{{asset('images/logo/logo.png')}}" alt="Canvas Logo"></a>
						</div>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li class="current"><a href="/">
									<div>Beranda</div>
								</a>
							</li>
							<li><a href="{{route('about')}}">
									<div>Tentang Kami</div>
								</a>
								<ul>
									<li><a href="{{route('about')}}">
											<div><i class="icon-gift"></i>Sejarah</div>
										</a></li>
									<li><a href="{{route('about')}}">
											<div><i class="icon-book2"></i>Visi & Misi</div>
										</a></li>
									<li><a href="{{route('about')}}">
											<div><i class="icon-wpforms"></i>BOD</div>
										</a></li>
								</ul>
							</li>
							<li class="mega-menu"><a href="#">
									<div>Unit Bisnis</div>
								</a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="{{route('oto')}}">
												<div>Otomotif</div>
											</a>
											<ul>
												<li><a href="{{route('motif', 'wuling')}}">
														<div>Wulings</div>
													</a></li>
												<li><a href="{{route('motif', 'masda')}}">
														<div>Mazda</div>
													</a></li>
												<li><a href="{{route('motif', 'honda')}}">
														<div>Honda</div>
													</a></li>
												<li><a href="{{route('motif', 'hyno')}}">
														<div>Hino</div>
													</a></li>
												<li><a href="{{route('motif', 'mercedes')}}">
														<div>Mercedez Benz</div>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#">
												<div>Properti</div>
											</a>
											<ul>
												<li><a href="#">
														<div>Primewood</div>
													</a></li>
												<li><a href="#">
														<div>Retail</div>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#">
												<div>Trading</div>
											</a>
											<ul>
												<li><a href="#">
														<div>Oil</div>
													</a></li>
												<li><a href="#">
														<div>Tire</div>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#">
												<div>Mining</div>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="{{route('berita')}}">
									<div>Berita</div>
								</a></li>
							<li class="mega-menu"><a href="{{route('karir')}}">
									<div>Karir</div>
								</a></li>
							<li><a href="{{route('kontak')}}">
									<div>Kontak</div>
								</a></li>
						</ul>


						<!-- Top Search
						============================================= -->
						<div id="top-search" style="margin: 0 0 0 15px;">
							<a href="#"><img style="" src="{{asset('images/eng.png')}}" width="30" height="30" alt=""></a>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
		@yield('content')
		<!-- Copyrights
			============================================= -->
		<div id="copyrights">

			<div class="container clearfix">

				<div class="col center">
					Copyrights &copy; 2019 All Rights Reserved by <a href="#">Kumala Group.</a>
				</div>

				<!-- <div class="col_half col_last tright">
						<div class="fright clearfix">
							<div class="copyrights-menu copyright-links nobottommargin">
								<a href="#">Home</a>/<a href="#">Tentang Kami</a>/<a href="#">Unit Bisnis</a>/<a href="#">Berita</a>/<a href="#">Karir</a>/<a href="#">Kontak</a>
							</div>
						</div>
					</div> -->

			</div>

		</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('js/functions.js')}}"></script>

</body>

</html>