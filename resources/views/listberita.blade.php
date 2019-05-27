<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
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

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

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
							<li><a href="/">
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
											<div><i class="icon-umbrella"></i>Visi & Misi</div>
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
							<li class="mega-menu current"><a href="#">
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
						<div id="top-search">
							<a href="#"><img style="" src="{{asset('images/eng.png')}}" width="30" height="30" alt=""></a>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Berita</h1>
				<span>Berita Terkini</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Berita</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows">
						@foreach ($berita as $item)
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="{{route('single', $item->id)}}"><img style="height: 200px" class="image_fade" src="{{asset('img/berita/'.$item['gambar'])}}" alt="Image"></a>
							</div>
							<div class="entry-title">
								<h3>{{$item->judul}}</h3>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i>{{date_format($item->updated_at, "d F Y")}}</li>
								@if($item->type == "berita")
								<li><span class="badge badge-secondary">Berita</span></li>
								@else
								<li><span class="badge badge-info">Promo</span></li>
								@endif
							</ul>
							<div class="entry-content">
								<p>{{substr($item->deskripsi,0, 60)}}...<a href="{{route('single', $item->id)}}">Lebih lanjut. </a></p>
							</div>
						</div>
						@endforeach

					</div><!-- #posts end -->

					<div class="row">
						<div class="col-12">
							<nav aria-label="Page navigation example">
								<ul class="pagination justify-content-center">
									{{$berita->links()}}
								</ul>
							</nav>
						</div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col center">
						Copyrights &copy; 2019 All Rights Reserved by <a href="#">Kumala Group.</a>
					</div>

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