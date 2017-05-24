@extends('base')

@section('content')
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-8 bottommargin">
					<div class="col_full bottommargin-lg">
						<div class="fslider flex-thumb-grid grid-6" data-animation="fade" data-arrows="true" data-thumbs="true">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide" data-thumb="{{ asset('images/tanaman/paku.jpg') }}">
										<a href="#">
											<img src="{{ asset('images/tanaman/paku.jpg') }}" alt="">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Tanaman 1</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="slide" data-thumb="{{ asset('images/tanaman/a.jpg') }}">
										<a href="#">
											<img src="{{ asset('images/tanaman/a.jpg') }}" alt="">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>tanaman 2</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="slide" data-thumb="{{ asset('images/tanaman/b.jpg') }}">
										<a href="#">
											<img src="{{ asset('images/tanaman/b.jpg') }}" alt="">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Tanaman 3</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="slide" data-thumb="{{ asset('images/tanaman/begonia.jpg') }}">
										<a href="#">
											<img src="{{ asset('images/tanaman/begonia.jpg') }}" alt="">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Tanaman 4</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="slide" data-thumb="{{ asset('images/tanaman/kaktus.jpg') }}">
										<a href="#">
											<img src="{{ asset('images/tanaman/kaktus.jpg') }}" alt="">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Tanaman 5</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="slide" data-thumb="{{ asset('images/tanaman/c.jpg') }}">
										<a href="#">
											<img src="{{ asset('images/tanaman/c.jpg') }}" alt="">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Tanaman 6</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="clear"></div>
					<div class="col_full bottommargin-lg clearfix">
						<div class="fancy-title title-border">
							<h3>Berita</h3>
						</div>
						<div class="ipost clearfix">
							<div class="col_half bottommargin-sm">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="{{ asset('images/magazine/7.jpg') }}" alt="Image"></a>
								</div>
							</div>
							<div class="col_half bottommargin-sm col_last">
								<div class="entry-title">
									<h3><a href="blog-single.html">Recovery Kebun Raya Bali Pasca Banjir</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								</ul>
								<div class="entry-content">
									<p>Keindahan Kebun Raya Bali didukung oleh keberadaan alam sekitarnya sebagai kawasan wisata Bedugul yang telah dikenal oleh masyarakat dunia. Bedugul merupakan kawasan tridanau dengan vegetasi hutan hujan tropis pegunungan. Bukit yang ada disekitar kawasan seperti Bukit Tapak, Bukit Pohen, dan Bukit Lesung sebagai back ground pemandangan alam Kebun Raya Bali.</p>
									<p><a href="">Lihat selengkapnya&raquo;</a></p>
								</div>
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_half nobottommargin">
							<div class="spost clearfix">
								<div class="entry-image">
									<a href="#"><img src="{{ asset('images/magazine/small/1.jpg') }}" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="#">Judul Berita-2</a></h4>
									</div>
									<ul class="entry-meta">
										<li><i class="icon-calendar3"></i> 1st Aug 2014</li>
									</ul>
								</div>
							</div>
							<div class="spost clearfix">
								<div class="entry-image">
									<a href="#"><img src="{{ asset('images/magazine/small/2.jpg') }}" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="#">Judul Berita-3</a></h4>
									</div>
									<ul class="entry-meta">
										<li><i class="icon-calendar3"></i> 13th Sep 2014</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col_half nobottommargin col_last">
							<div class="spost clearfix">
								<div class="entry-image">
									<a href="#"><img src="{{ asset('images/magazine/small/3.jpg') }}" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="#">Judul Berita-4</a></h4>
									</div>
									<ul class="entry-meta">
										<li><i class="icon-calendar3"></i> 31st Jan 2014</li>
									</ul>
								</div>
							</div>
							<div class="spost clearfix">
								<div class="entry-image">
									<a href="#"><img src="{{ asset('images/magazine/small/4.jpg') }}" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="#">Judul Berita-5</a></h4>
									</div>
									<ul class="entry-meta">
										<li><i class="icon-calendar3"></i> 27th July 2014</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col_full bottommargin-lg clearfix">
						<div class="clear"></div>
						<div class="col_half nobottommargin"></div>
					</div>

					<div class="fancy-title title-border">
						<h3>Galeri Kebun Raya Bali</h3> <!-- ini nampilin foto2 instagram -->
					</div>

					<div class="col_full masonry-thumbs col-6 bottommargin-lg clearfix" data-big="5" data-lightbox="gallery">
						<a href="{{ asset('images/magazine/1.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/1.jpg') }}" alt="Gallery Thumb 1"></a>
						<a href="{{ asset('images/magazine/2.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/2.jpg') }}" alt="Gallery Thumb 2"></a>
						<a href="{{ asset('images/magazine/3.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/3.jpg') }}" alt="Gallery Thumb 3"></a>
						<a href="{{ asset('images/magazine/4.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/4.jpg') }}" alt="Gallery Thumb 4"></a>
						<a href="{{ asset('images/magazine/5.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/5.jpg') }}" alt="Gallery Thumb 5"></a>
						<a href="{{ asset('images/magazine/6.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/6.jpg') }}" alt="Gallery Thumb 6"></a>
						<a href="{{ asset('images/magazine/7.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/7.jpg') }}" alt="Gallery Thumb 7"></a>
						<a href="{{ asset('images/magazine/8.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/8.jpg') }}" alt="Gallery Thumb 8"></a>
						<a href="{{ asset('images/magazine/9.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/9.jpg') }}" alt="Gallery Thumb 9"></a>
						<a href="{{ asset('images/magazine/10.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/10.jpg') }}" alt="Gallery Thumb 10"></a>
						<a href="{{ asset('images/magazine/11.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/11.jpg') }}" alt="Gallery Thumb 11"></a>
						<a href="{{ asset('images/magazine/12.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/12.jpg') }}" alt="Gallery Thumb 12"></a>
						<a href="{{ asset('images/magazine/13.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/13.jpg') }}" alt="Gallery Thumb 13"></a>
						<a href="{{ asset('images/magazine/14.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/14.jpg') }}" alt="Gallery Thumb 14"></a>
						<a href="{{ asset('images/magazine/15.jpg') }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('images/magazine/thumb/15.jpg') }}" alt="Gallery Thumb 15"></a>
					</div>

					<div class="col_full nobottommargin clearfix"></div>
				</div>

				<div class="col-md-4">
					<div class="line hidden-lg hidden-md"></div>
					<div class="sidebar-widgets-wrap clearfix">
						<h5>
							Kebun Raya Bali terletak di daerah Bedugul di tengah-tengah pulau Bali sekitar 60 KM dari Denpasar. 
							Disarankan untuk menggunakan bus tourish, mobil, taksi, atau sepeda motor karena transportasi umum tidak memiliki
							jadwal yang tidak teratur. Berikut ini adalah jadwal beserta harga tiket masuk Kebun Raya Bali:
						</h5>
						<div class="widget clearfix schedule-open">
							<h4>Buka Pukul 08:00 - 18:00 WITA</h4>
						</div>
						<div class="widget widget_links clearfix">
							<h4>Tiket Masuk</h4>
							<table class="tiket-masuk">
								<tr>
									<td>Tiket pengunjung Domestik</td>
									<td>:</td>
									<td>Rp. 9.000,-</td>
								</tr>
								<tr>
									<td>Tiket pengunjung Asing</td>
									<td>:</td>
									<td>Rp. 17.000,-</td>
								</tr>
								<tr>
									<td>Tiket parkir roda 2</td>
									<td>:</td>
									<td>Rp. 3.000,-</td>
								</tr>
								<tr>
									<td>Tiket parkir roda 4</td>
									<td>:</td>
									<td>Rp. 6.000,-</td>
								</tr>
								<tr>
									<td>Tiket parkir roda 6</td>
									<td>:</td>
									<td>Rp. 11.000,-</td>
								</tr>
								<tr>
									<td>Tiket mobil masuk</td>
									<td>:</td>
									<td>Rp. 11.000,-</td>
								</tr>
							</table>
						</div>

						<div class="widget clearfix">
							<h4>Virtual Herbarium</h4>
							<div class="vir-herba-item">
								<h5>Ferns of Bali</h5>
								<div class="flickr-feed masonry-thumbs col-6">
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
								</div>
							</div>
							<div class="vir-herba-item">
								<h5>Aroids of Bali</h5>
								<div class="flickr-feed masonry-thumbs col-6">
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
								</div>
							</div>
							<div class="vir-herba-item">
								<h5>Begonia of Bali</h5>
								<div class="flickr-feed masonry-thumbs col-6">
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
								</div>
							</div>
							<div class="vir-herba-item">
								<h5>Medicinal of Bamboo</h5>
								<div class="flickr-feed masonry-thumbs col-6">
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
								</div>
							</div>
							<div class="vir-herba-item">
								<h5>Araceae of Bali</h5>
								<div class="flickr-feed masonry-thumbs col-6">
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
								</div>
							</div>
							<div class="vir-herba-item">
								<h5>Pitcher Plant</h5>
								<div class="flickr-feed masonry-thumbs col-6">
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
								</div>
							</div>
							<div class="vir-herba-item">
								<h5>Rhododendrons</h5>
								<div class="flickr-feed masonry-thumbs col-6">
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
									<a href="" title="asdasdasd" data-lightbox="gallery-item">
										<img src="{{ asset('images/virtual-herbarium/a.jpg') }}" />
									</a>
								</div>
							</div>
						</div>

						<div class="widget clearfix">
							<div class="tabs nobottommargin clearfix" id="sidebar-tabs">
								<ul class="tab-nav clearfix">
									<li><a href="#tabs-1">Popular</a></li>
									<li><a href="#tabs-2">Recent</a></li>
									<li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li>
								</ul>
								<div class="tab-container">
									<div class="tab-content clearfix" id="tabs-1">
										<div id="popular-post-list-sidebar">
											<div class="spost clearfix">
												<div class="entry-image">
													<a href="#" class="nobg"><img class="img-circle" src="{{ asset('images/magazine/small/3.jpg') }}" alt=""></a>
												</div>
												<div class="entry-c">
													<div class="entry-title">
														<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
													</div>
													<ul class="entry-meta">
														<li><i class="icon-comments-alt"></i> 35 Comments</li>
													</ul>
												</div>
											</div>
											<div class="spost clearfix">
												<div class="entry-image">
													<a href="#" class="nobg"><img class="img-circle" src="{{ asset('images/magazine/small/2.jpg') }}" alt=""></a>
												</div>
												<div class="entry-c">
													<div class="entry-title">
														<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
													</div>
													<ul class="entry-meta">
														<li><i class="icon-comments-alt"></i> 24 Comments</li>
													</ul>
												</div>
											</div>
											<div class="spost clearfix">
												<div class="entry-image">
													<a href="#" class="nobg"><img class="img-circle" src="{{ asset('images/magazine/small/1.jpg') }}" alt=""></a>
												</div>
												<div class="entry-c">
													<div class="entry-title">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
													</div>
													<ul class="entry-meta">
														<li><i class="icon-comments-alt"></i> 19 Comments</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-content clearfix" id="tabs-2">
										<div id="recent-post-list-sidebar">
											<div class="spost clearfix">
												<div class="entry-image">
													<a href="#" class="nobg"><img class="img-circle" src="{{ asset('images/magazine/small/1.jpg') }}" alt=""></a>
												</div>
												<div class="entry-c">
													<div class="entry-title">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
													</div>
													<ul class="entry-meta">
														<li>10th July 2014</li>
													</ul>
												</div>
											</div>
											<div class="spost clearfix">
												<div class="entry-image">
													<a href="#" class="nobg"><img class="img-circle" src="{{ asset('images/magazine/small/2.jpg') }}" alt=""></a>
												</div>
												<div class="entry-c">
													<div class="entry-title">
														<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
													</div>
													<ul class="entry-meta">
														<li>10th July 2014</li>
													</ul>
												</div>
											</div>
											<div class="spost clearfix">
												<div class="entry-image">
													<a href="#" class="nobg"><img class="img-circle" src="{{ asset('images/magazine/small/3.jpg') }}" alt=""></a>
												</div>
												<div class="entry-c">
													<div class="entry-title">
														<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
													</div>
													<ul class="entry-meta">
														<li>10th July 2014</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-content clearfix" id="tabs-3">
										<div id="recent-post-list-sidebar">
											<div class="spost clearfix">
												<div class="entry-image">
													<a href="#" class="nobg"><img class="img-circle" src="{{ asset('images/icons/avatar.jpg') }}" alt=""></a>
												</div>
												<div class="entry-c">
													<strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
												</div>
											</div>
											<div class="spost clearfix">
												<div class="entry-image">
													<a href="#" class="nobg"><img class="img-circle" src="{{ asset('images/icons/avatar.jpg') }}" alt=""></a>
												</div>
												<div class="entry-c">
													<strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
												</div>
											</div>
											<div class="spost clearfix">
												<div class="entry-image">
													<a href="#" class="nobg"><img class="img-circle" src="{{ asset('images/icons/avatar.jpg') }}" alt=""></a>
												</div>
												<div class="entry-c">
													<strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection