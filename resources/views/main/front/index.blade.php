@extends('layouts.frontend.app')

@section('content')
	<div id="content" class="content full padding-b0">
				<div class="container">
					<!-- Welcome Content and Services overview -->
					<div class="row">
							<div class="col-md-6">
								<h1 class="uppercase strong">Selamat Datang di<br>Naga Mas Motor Dealer</h1>
								<p class="lead">Dealer resmi <span class="accent-color">Honda Indonesia</span></p>
							</div>
								<div class="col-md-6">
									<p>Temukan motor Honda yang sesuai dengan Anda di sini. Dengan penawaran menarik dan DP ringan yang bisa Anda dapatkan. Hanya di Naga Mas Motor. Dealer resmi Honda</p>
									<p>Banyak keuntungan dan bonus untuk semua pelanggan. Ayo, datang ke dealer kami sekarang. Pelayanan yang baik juga ramah bisa Anda rasakan. Ingin kredit motor dengan DP ringan ? Datang saja ke <span class="accent-color">Naga Mas Motor</span></p>
								</div>
						</div>
						<div class="spacer-75"></div>
						<!-- Recently Listed Vehicles -->
						<section class="listing-block recent-vehicles">
							<div class="listing-header">
									<h3>Produk Terbaru Kami</h3>
								</div>
								<div class="listing-container">
										<div class="carousel-wrapper">
												<div class="row">
														<ul class="owl-carousel carousel-fw" id="vehicle-slider" data-columns="4" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
															@if (!count($motors) == 0)
																@foreach ($recent as $motor)
																	<li class="item">
																			<div class="vehicle-block format-standard">
																					<a href="#" class="media-box"><img src="{{ $motor->image }}" alt=""></a>
																					<div class="vehicle-block-content">
																							<span class="label label-default vehicle-age">{{ $motor->year }}</span>
																							<h5 class="vehicle-title"><a href="#">{{ $motor->title }}</a></h5>
																							<span class="vehicle-cost">Rp {{ number_format($motor->price) }}</span>
																					</div>
																			</div>
																	</li>
																@endforeach
															@else
																<li class="item">
																		<div class="vehicle-block format-standard">
																				<a href="#" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
																				<div class="vehicle-block-content">
																						<span class="label label-default vehicle-age">0000</span>
																						<h5 class="vehicle-title"><a href="#">XXX XXX XXX</a></h5>
																						<span class="vehicle-cost">Rp 12,345,678</span>
																				</div>
																		</div>
																</li>
															@endif
														</ul>
												</div>
										</div>
								</div>
						</section>
						<div class="spacer-60"></div>

				</div>
				<div class="spacer-50"></div>

		</div>
@endsection
