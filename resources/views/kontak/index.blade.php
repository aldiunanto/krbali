@extends('base')

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>Kontak</h1>
		<span>Hubungi Kami</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('/') }}">Beranda</a></li>
			<li class="active">Kontak</li>
		</ol>
	</div>
</section>
<div id="page-menu">
	<div id="page-menu-wrap">
		<div class="container clearfix">
			<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
		</div>
	</div>
</div>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="col_half">
				<div class="fancy-title title-dotted-border">
					<h3>Kirimkan kami sebuah pesan</h3>
				</div>
				<div class="contact-widget">
					<div class="contact-form-result"></div>
					<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">
						<div class="form-process"></div>

						<div class="col_full">
							<label for="template-contactform-email">Email <small>*</small></label>
							<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
						</div>
						<div class="col_full">
							<label for="template-contactform-title">Perihal <small>*</small></label>
							<input type="text" id="template-contactform-title" name="template-contactform-title" value="" class="required sm-form-control" />
						</div>
						<div class="col_full">
							<label for="template-contactform-message">Pesan <small>*</small></label>
							<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
						</div>
						<div class="col_full">
							<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Kirim Pesan</button>
						</div>

					</form>
				</div>
			</div>
			<div class="col_half col_last">
				<section id="google-map" class="gmap" style="height: 410px;"></section>
			</div>

			<div class="clear"></div>

			<div class="row clear-bottommargin">
				<div class="col-md-3 col-sm-6 bottommargin clearfix">
					<div class="feature-box fbox-center fbox-bg fbox-plain">
						<div class="fbox-icon">
							<a href="#"><i class="icon-map-marker2"></i></a>
						</div>
						<h3>Kantor Pusat<span class="subtitle">Bali, Indonesia</span></h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 bottommargin clearfix">
					<div class="feature-box fbox-center fbox-bg fbox-plain">
						<div class="fbox-icon">
							<a href="#"><i class="icon-phone3"></i></a>
						</div>
						<h3>sms center<span class="subtitle">08113993202</span></h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 bottommargin clearfix">
					<div class="feature-box fbox-center fbox-bg fbox-plain">
						<div class="fbox-icon">
							<a href="#"><i class="icon-instagram"></i></a>
						</div>
						<h3>follow instagram<span class="subtitle">@krbalilipi</span></h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 bottommargin clearfix">
					<div class="feature-box fbox-center fbox-bg fbox-plain">
						<div class="fbox-icon">
							<a href="#"><i class="icon-facebook"></i></a>
						</div>
						<h3>Follow Facebook<span class="subtitle">facebook.com/krbali</span></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection