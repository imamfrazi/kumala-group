@extends('layouts.base')

@section('content')
<section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix">

	<div style class="slider-parallax-inner">

		<div class="swiper-container swiper-parent">

			<div class="swiper-wrapper">
				@foreach ($slides as $slide)
				<div class="swiper-slide dark" style="background-image: url('{{asset('img/slider/'.$slide->gambar)}}');">
					<div class="container clearfix">
						@if($slide->id % 2 ==0)
						<div class="slider-caption slider-caption-center">
							@else
							<div class="slider-caption">
								@endif
								<h2 data-animate="fadeInUp">{{$slide->judul}}</h2>
								<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">{{$slide->deskripsi}}</p>
								<a href="#" class="button button-rounded button-reveal button-small button-red tright"><i class="icon-angle-right"></i><span>Call to Action</span></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
				<div class="slide-number">
					<div class="slide-number-current"></div><span>/</span>
					<div class="slide-number-total"></div>
				</div>
			</div>

		</div>

</section>

<!-- Content
		============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="heading-block notopmargin notopborder center">
			<h3 data-animate="fadeInDown">Tentang Kami </h3>
			<!-- <span>We have worked on some Awesome Projects that are worth boasting of.</span> -->
		</div>

		<div class="container clearfix">

			<div class="col_one_third bottommargin-sm center">
				<img data-animate="fadeInLeft" src="images/about/3.jpg" alt="about-us">
			</div>

			<div class="col_two_third bottommargin-sm col_last topmargin">

				<p align="justify" style="font-size: 11pt;" data-animate="fadeInRight">
					Didirikan pada tahun 1991, Kumala Motor Group adalah salah satu perusahaan bisnis terbesar di sisi timur Indonesia. Kumala Motor Group membangun perusahaan yang kompetitif dengan mengembangkan kerjasama yang saling menguntungkan antara merek-merek terkemuka nasional dan internasional di berbagai bidang.
					Kumala Motor Group telah berhasil mengembangkan berbagai industri dan memegang beberapa merek terkemuka. <a href="{{ route('about') }}">Lebih lanjut.</a></p>
			</div>

		</div>

		<div class="section notopmargin notopborder" id="unitbisnis">

			<div class="heading-block center">
				<h3 data-animate="fadeInDown">Unit Bisnis </h3>
				<!-- <span>We have worked on some Awesome Projects that are worth boasting of.</span> -->
			</div>

			<div class="container clear-bottommargin clearfix">
				<div class="col_one_fourth nobottommargin">
					<div class="feature-box media-box" data-animate="fadeInDownBig">
						<div class="flip">
							<div class="front" style="background-image: url(https://images.unsplash.com/photo-1474244896358-ce3784088cc8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
								<h1 class="text-shadow">Otomotif</hi>
							</div>
							<div class="back">
								<h2><a style="text-decoration:none;color: #fff !important;" href="{{route('oto')}}">Otomotif</a></h2>
								<p>Good tools make application development quicker and easier to maintain than if you did everything by hand. <a href="{{route('oto')}}">Readmore.</a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col_one_fourth nobottommargin">
					<div class="feature-box media-box" data-animate="fadeInDownBig">
						<div class="flip">
							<div class="front" style="background-image: url(https://images.unsplash.com/photo-1522050212171-61b01dd24579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80)">
								<h1 class="text-shadow">Properties</hi>
							</div>
							<div class="back">
								<h2><a style="text-decoration:none;color: #fff !important;" href="otomotif.html">Properties</a></h2>
								<p>Good tools make application development quicker and easier to maintain than if you did everything by hand...<a href="#">Read more</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col_one_fourth nobottommargin">
					<div class="feature-box media-box" data-animate="fadeInDownBig">
						<div class="flip">
							<div class="front" style="background-image: url(https://images.unsplash.com/photo-1523841589119-b55aee0f66e7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60)">
								<h1 class="text-shadow">Trading</hi>
							</div>
							<div class="back">
								<h2><a style="text-decoration:none;color: #fff !important;" href="otomotif.html">Trading</a></h2>
								<p>Good tools make application development quicker and easier to maintain than if you did everything by hand. <a href="#">Readmore.</a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col_one_fourth nobottommargin col_last">
					<div class="feature-box media-box" data-animate="fadeInDownBig">
						<div class="flip">
							<div class="front" style="background-image: url(https://images.unsplash.com/photo-1523848309072-c199db53f137?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
								<h1 class="text-shadow">Mining<i class="baseline-warning"></i></hi>
							</div>
							<div class="back">
								<h2><a style="text-decoration:none;color: #fff !important;" href="otomotif.html">Mining</a></h2>
								<p>Good tools make application development quicker and easier to maintain than if you did everything by hand. <a href="#">Read more</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>



		<div class="bottommargin-sm">

			<div class="container clearfix">
				<div class="heading-block center">
					<h3 data-animate="fadeInDown">Berita & Promo</h3>
				</div>
			</div>

			<div class="container clear-bottommargin clearfix">
				@foreach ($berita as $data)
				<div class="col_one_fourth nobottommargin">
					<div class="ipost clearfix" data-animate="fadeIn">
						<div class="entry-image">
							<a href="{{route('single', $data->id)}}"><img style="height: 180px" class="image_fade" src="{{asset('img/berita/'.$data['gambar'])}}" alt="Image"></a>
						</div>
						<div class="entry-title">
							<h3><a href="{{route('single', $data->id)}}">{{$data->judul}}</a></h3>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>{{date_format($data->updated_at, "d F Y")}}</li>
							@if($data->type == "berita")
							<li><span class="badge badge-secondary">Berita</span></li>
							@else
							<li><span class="badge badge-info">Promo</span></li>
							@endif
						</ul>
						<div class="entry-content">
							<p>{{substr($data->deskripsi,0, 60)}}...<a href="{{route('single', $data->id)}}">Lebih lanjut. </a></p>
						</div>
					</div>
				</div>
				@endforeach

			</div>

			<div class="row topmargin center">
				<div class="col-12 topmargin">
					<a href="{{route('berita')}}" class="button button-rounded button-reveal button-small button-red tright">Selengkapnya!</a>
				</div>
			</div>

		</div>

		<div class="section topmargin-lg">

			<div class="container clearfix">

				<div class="col_three_fifth">

					<div class="heading-block">
						<h3 data-animate="fadeInDown">Ayo <span>Bergabung</span> bersama Kami!</h3>
						<!-- <span>Benchmarking your website's performance helps you make great choices for your business.</span> -->
					</div>

					<p align="justify" data-animate="fadeInLeft">Bagi Kumala Group, Sumber Daya Manusia (SDM) merupakan aset dan faktor utama yang menentukan kesuksesan perusahaan. Kumala Group membina hubungan kerja jangka panjang yang saling menguntungkan, sehingga tumbuh ikatan dan rasa kebersamaan antara
						karyawan dan perusahaan untuk bersama mewujudkan peningkatan kesejahteraan yang berkelanjutan.</p>

					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam excepturi quod, fuga architecto provident, cupiditate delectus voluptate eaque! Sit neque ut eum, voluptatibus odit cum dolorum ipsa voluptates inventore cumque a.</p> -->

					<a href="{{ route('karir') }}">Lebih lanjut.</a>

				</div>

				<div class="col_two_fifth  col_last">
					<img src="images/about/3.jpg" alt="" data-animate="fadeInRight">
				</div>

			</div>

			<div class="line"></div>

			<div class="heading-block center">
				<h3 data-animate="fadeInDown">Dapatkan <span>Informasi</span> Terkini</h3>
			</div>

			<div class="subscribe-widget">
				<div class="widget-subscribe-form-result"></div>
				<form id="widget-subscribe-form2" action="include/subscribe.php" method="post" class="nobottommargin" data-animate="fadeInUp">
					<div class="input-group input-group-md divcenter" style="max-width:600px;">
						<!-- <div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-email2"></i></div>
									</div> -->
						<input style="margin-top: 6px;" type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
						<div class="input-group-append">
							<button class="button button-rounded button-reveal button-medium button-red tright" type="submit">Subscribe</button>
						</div>
					</div>
				</form>
			</div>

		</div>
		<!-- </div> -->

		<div class="topmargin-sm nobottommargin">

			<div class="heading-block center">
				<h3 data-animate="fadeInDown">Partner</h3>
			</div>

			<div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6" style="padding: 20px 0;">
				@foreach ($partner as $data)
				<div class="oc-item"><a href="#"><img src="{{asset('img/partner/'.$data->gambar)}}" alt="Clients"></a></div>
				@endforeach
			</div>

		</div>

	</div>

</section><!-- #content end -->

<!-- Footer
		============================================= -->
<footer id="footer" class="dark">

	<div class="container">

		<!-- Footer Widgets
				============================================= -->
		<div class="footer-widgets-wrap clearfix">

			<div class="col_one_third">

				<div class="widget clearfix">

					<h4>Kumala Group</h4>
					<p>Didirikan pada tahun 1991, Kumala Motor Group adalah salah satu perusahaan bisnis terbesar di sisi timur Indonesia. Kumala Motor Group membangun perusahaan yang kompetitif dengan mengembangkan kerjasama yang saling menguntungkan antara merek-merek terkemuka nasional dan internasional di berbagai bidang.
						<a href="{{route('about')}}">Lebih lanjut.</a></p>


				</div>

			</div>

			<div class="col_one_third">

				<div class="widget clearfix">
					<h4>Hubungi Kami</h4>

					<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
						<address>
							<strong>Alamat :</strong><br>
							Jl.A.Mappanyukki No.2 <br>
							Makassar, Sulawesi Selatan, Indonesia<br>
						</address>
						<abbr title="Phone Number"><strong>Telepon:</strong></abbr> (0431) 871-408<br>
						<abbr title="Email Address"><strong>Email:</strong></abbr> administrator@kumalamotor.com
					</div>

				</div>

				<div class="widget clearfix">

					<a href="#" class="social-icon si-small si-rounded si-facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="#" class="social-icon si-small si-rounded si-twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="#" class="social-icon si-small si-rounded si-gplus">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
					</a>

					<a href="#" class="social-icon si-small si-rounded si-linkedin">
						<i class="icon-linkedin"></i>
						<i class="icon-linkedin"></i>
					</a>

				</div>

			</div>

			<div class="col_one_third col_last">

				<div class="widget quick-contact-widget form-widget clearfix">

					<h4>Kirim Pesan Kepada Kami</h4>

					<div class="form-result"></div>

					<form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form nobottommargin">

						<div class="form-process"></div>

						<div class="input-group divcenter">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="icon-user"></i></div>
							</div>
							<input type="text" class="required form-control" id="nama" name="nama" value="" placeholder="Nama anda" />
						</div>
						<div class="input-group divcenter">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="icon-email2"></i></div>
							</div>
							<input type="text" class="required form-control email" id="email" name="email" value="" placeholder="Email anda" />
						</div>
						<textarea class="required form-control input-block-level short-textarea" id=pesan" name=pesan" rows="4" cols="30" placeholder="Pesan anda"></textarea>
						<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
						<input type="hidden" name="prefix" value="quick-contact-form-">
						<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-3d button-small button-rounded button-red" value="submit">Kirim</button>

					</form>

				</div>

			</div>

		</div><!-- .footer-widgets-wrap end -->

	</div>

	@endsection