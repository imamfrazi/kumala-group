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

	<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">

	<!-- Document Title
	============================================= -->
	<title>Kumala Group</title>

	<style>
		.detail-list img {
			width: 150px;
			margin-top: 15px;
		}
	</style>

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
									<div>Home</div>
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
							<li class="mega-menu current"><a href="#">
									<div>Unit Bisnis</div>
								</a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#">
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
							<li><a href="kontak.html">
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
		<section id="page-title" class="page-title-parallax" style="background-size: cover; background-image: url('https://images.unsplash.com/photo-1474244896358-ce3784088cc8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

			<div class="container clearfix">
				<!-- <h1 data-animate="fadeInUp">Karir</h1> -->
				<!-- <span data-animate="fadeInUp" data-delay="300">Kumala Group</span> -->
			</div>

		</section><!-- #page-title end -->
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="heading-block notopmargin notopborder center">
					<h3 data-animate="fadeInDown">Detail </h3>
				</div>

				<div class="container clearfix">

					<div class="col_two_fifth">
						<img src="{{asset('img/automotif/'.$data->gambar)}}" alt="" data-animate="fadeInRight">
					</div>

					<div class="col_three_fifth  col_last">
						<div>
							<h4 style=" color:#C02942" data-animate="fadeInDown">Tentang {{$data->nama}}</h4>
						</div>

						<p align="justify" data-animate="fadeInLeft">{{$data->deskripsi}}</p>
					</div>

				</div>
				<div class="container bottommargin">
					<div class="row">
						<div class="col-4">
							<h3>Pilih Warna</h3>
						</div>

						<div class="col-6">
							<button class="button button-rounded button-reveal button-small button-red tright">Download Brosur</button>
							<button class="button button-rounded button-reveal button-small button-red tright" data-toggle="modal" data-target=".bs-example-modal-lg">Test Drive</button>

							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-body">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel">Layanan Test Drive</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">
												<form>
													<div class="form-group">
														<label for="namalengkap">Nama: </label>
														<input type="text" class="form-control" id="namalengkap" placeholder="Nama Lengkap anda">
													</div>
													<div class="form-group">
														<label for="email">Email :</label>
														<input type="text" class="form-control" id="email" placeholder="Email anda">
													</div>
													<div class="form-group">
														<label for="nohp">No Telepon: </label>
														<input type="text" class="form-control" id="nohp" placeholder="No Telepon anda">
													</div>
													<div class="form-group">
														<label for="exampleFormControlSelect1">Jenis Kelamin</label>
														<select class="form-control" id="exampleFormControlSelect1">
															<option>Laki-laki</option>
															<option>Perempuan</option>
														</select>
													</div>
													<div class="form-group">
														<label for="alamat">Alamat anda : </label>
														<input type="text" class="form-control" id="alamat" placeholder="alamat anda">
													</div>
													<div class="form-group">
														<label for="asal">Asal Kota: </label>
														<input type="text" class="form-control" id="asal" placeholder="Asal Kota anda">
													</div>
													<div class="form-group">
														<label for="daerah">Daerah di kota anda: </label>
														<input type="text" class="form-control" id="daerah" placeholder="daerah di kota anda">
													</div>
													<button type="submit" class="button button-3d button-small button-rounded button-red">Kirim</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>

							<button class="button button-rounded button-reveal button-small button-red tright" data-toggle="modal" data-target=".bs-example-modal-md">Cek Penawaran</button>

							<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-md">
									<div class="modal-body">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel">Dapatkan Penawaran Terbaik</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">
												<form>
													<div class="form-group">
														<label for="namalengkap">Nama Lengkap: </label>
														<input type="text" class="form-control" id="namalengkap" placeholder="Nama Lengkap anda">
													</div>
													<div class="form-group">
														<label for="email">Email :</label>
														<input type="text" class="form-control" id="email" placeholder="Email anda">
													</div>
													<div class="form-group">
														<label for="nohp">No Telepon: </label>
														<input type="text" class="form-control" id="nohp" placeholder="No Telepon anda">
													</div>
													<div class="form-group">
														<label for="exampleFormControlSelect1">Rincian Pembelian</label>
														<select class="form-control" id="exampleFormControlSelect1">
															<option>0-1 Bulan</option>
															<option>0-2 Bulan</option>
															<option>0-3 Bulan</option>
														</select>
													</div>
													<div class="form-group">
														<label for="exampleFormControlSelect1">Pilih Mobil*</label>
														<select class="form-control" id="exampleFormControlSelect1">
															<option>Honda CX-5</option>
															<option>Mercedez Benz</option>
															<option>Hino</option>
														</select>
													</div>
													<div class="form-group">
														<label for="exampleFormControlSelect1">Pilih Kota</label>
														<select class="form-control" id="exampleFormControlSelect1">
															<option>Makassar</option>
															<option>Gorontalo</option>
															<option>Manado</option>
														</select>
													</div>
													<button type="submit" class="button button-3d button-small button-rounded button-red">Minta Penawaran</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2"></div>
					</div>

					<div class="row">
						<div class="col-4 detail-list">
							<img src="{{asset('img/automotif/'.$data->gambar)}}" alt="" data-animate="fadeInRight"> <br>
							<img style="margin-top: 30px;" src="{{asset('img/automotif/'.$data->gambar2)}}" alt="" data-animate="fadeInRight"> </br>
							<img style="margin-top: 30px;" src="{{asset('img/automotif/'.$data->gambar3)}}" alt="" data-animate="fadeInRight">
						</div>

						<div class="col-6 detail-img center">
							<h4>{{$data->nama}}</h4>
							<img src="{{asset('img/automotif/'.$data->gambar)}}" alt="" data-animate="fadeInRight">
						</div>
						<div class="col-2"></div>
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