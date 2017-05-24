<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Kebun Raya Bali" />

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<title>{{ $title }} - Kebun Raya Bali</title>
</head>
<body class="stretched">
	<div id="wrapper" class="clearfix">
		<header id="header" class="sticky-style-2">
			<div class="container clearfix">
				<div id="logo">
					<a href="{{ url('/') }}" class="standard-logo" data-dark-logo="{{ asset('images/logo-dark.png') }}"><img src="{{ asset('images/logo.png') }}" alt="Canvas Logo"></a>
					<a href="{{ url('/') }}" class="retina-logo" data-dark-logo="{{ asset('images/logo-dark@2x.png') }}"><img src="{{ asset('images/logo@2x.png') }}" alt="Canvas Logo"></a>
				</div>
			</div>
			<div id="header-wrap">
				<nav id="primary-menu" class="style-2">
					<div class="container clearfix">
						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
						<ul>
							<li {!! (currentRoute('class') == 'beranda' ? 'class="current"' : '') !!}><a href="{{ url('/') }}"><div>Beranda</div></a></li>
							<li {!! (currentRoute('class') == 'tentang' ? 'class="current"' : '') !!}><a href="#"><div>Tentang</div></a></li>
							<li {!! (currentRoute('class') == 'koleksi' ? 'class="current"' : '') !!}><a href="#"><div>Koleksi</div></a></li>
							<li {!! (currentRoute('class') == 'informasi' ? 'class="current"' : '') !!}><a href="#"><div>Informasi</div></a></li>
							<li {!! (currentRoute('class') == 'perpustakaan' ? 'class="current"' : '') !!}><a href="#"><div>Perpustakaan</div></a></li>
							<li {!! (currentRoute('class') == 'layananPublik' ? 'class="current"' : '') !!}><a href="#"><div>Layanan Publik</div></a></li>
							<li {!! (currentRoute('class') == 'produk' ? 'class="current"' : '') !!}><a href="#"><div>Produk</div></a></li>
							<li {!! (currentRoute('class') == 'kontak' ? 'class="current"' : '') !!}><a href="#"><div>Kontak</div></a></li>
						</ul>
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Ketik &amp; Dan Tekan Enter..">
							</form>
						</div>
					</div>
				</nav>
			</div>
		</header>

		@yield('content')

		<footer id="footer" class="dark">
			<div class="container">
				<div class="footer-widgets-wrap clearfix">
					<div class="col_one_third">
						<div class="widget clearfix">
							<img src="{{ asset('images/footer-widget-logo.png') }}" alt="" class="footer-logo">
							<div style="background: url('{{ asset('images/world-map.png') }}') no-repeat center center; background-size: 100%;">
								<address>
									<strong>Kontak</strong><br><br>
										Balai Konservasi Tumbuhan<br>
										Kebun Raya "Eka Karya" Bali - LIPI<br>	
										Candikuning, Baturiti, Tabanan, Balai<br>
										INDONESIA - 821917<br><br>
								</address>
								<abbr title="Np. Telepon"><strong>No. Telepon:</strong></abbr> xxxxxxx <br>
								<abbr title="Fax"><strong>Fax:</strong></abbr> xxxxxxxx <br>
								<abbr title="Alamat Email"><strong>E-mail:</strong></abbr> blabla@bla.com
							</div>
						</div>
					</div>
					<div class="col_one_third">
						<div class="widget clearfix">
							<h4>Testimoni</h4>
							<div class="fslider testimonial no-image nobg noborder noshadow nopadding" data-animation="slide" data-arrows="false">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide">
											<div class="testi-image">
												<a href="#"><img src="{{ asset('images/testimonials/3.jpg') }}" alt="Customer Testimonails"></a>
											</div>
											<div class="testi-content">
												<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
												<div class="testi-meta">
													Steve Jobs
													<span>Apple Inc.</span>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="testi-image">
												<a href="#"><img src="{{ asset('images/testimonials/2.jpg') }}" alt="Customer Testimonails"></a>
											</div>
											<div class="testi-content">
												<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
												<div class="testi-meta">
													Collis Ta'eed
													<span>Envato Inc.</span>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="testi-image">
												<a href="#"><img src="{{ asset('images/testimonials/1.jpg') }}" alt="Customer Testimonails"></a>
											</div>
											<div class="testi-content">
												<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
												<div class="testi-meta">
													John Doe
													<span>XYZ Inc.</span>
												</div>
											</div>
										</div>
									</div>
								</div>
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
							<a href="#" class="social-icon si-small si-rounded si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>
							<a href="#" class="social-icon si-small si-rounded si-youtube">
								<i class="icon-youtube"></i>
								<i class="icon-youtube"></i>
							</a>
						</div>

					</div>

					<div class="col_one_third col_last">
						<div class="widget quick-contact-widget clearfix">
							<h4>Testimoni</h4>
							<div class="quick-contact-form-result"></div>
							<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">
								<div class="form-process"></div>
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="text" class="required form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Alamat Email" />
								</div>
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-comments"></i></span>
									<input type="text" class="required form-control input-block-level" id="quick-contact-form-message" perihal="quick-contact-form-message" value="" placeholder="Perihal" />
								</div>
								<textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Tulis Testimoni"></textarea>
								<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
								<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-danger nomargin" value="submit">Kirim Testimoni</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			
			<div id="copyrights">
				<div class="container clearfix">
					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.
					</div>
					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<div class="copyrights-menu copyright-links nobottommargin">
								<a href="{{ url('/') }}">Beranda</a>/<a href="#">Tentang</a>/<a href="#">Koleksi</a>/<a href="#">Informasi</a>/<a href="#">Produk</a>/<a href="#">Kontak</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div id="gotoTop" class="icon-angle-up"></div>

	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
</body>
</html>