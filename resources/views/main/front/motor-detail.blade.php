@extends('layouts.frontend.app')

@section('content')
  <!-- Start Page header -->
  <div class="page-header parallax" style="background-image:url({{ asset('front/images/motor/banner.png')}});">
    <div class="container">
        <h1 class="page-title">{{ $motor->title }} Detail</h1>
      </div>
  </div>
  <!-- Utiity Bar -->

  <!-- Start Body Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">
            <!-- Vehicle Details -->
              <article class="single-vehicle-details">
                  <div class="single-vehicle-title">
                      <h2 class="post-title">{{ $motor->title }}</h2>
                  </div>
                  <div class="single-listing-actions">
                      {{-- <div class="btn-group pull-right" role="group">
                          <a href="#" class="btn btn-default" title="Save this car"><i class="fa fa-star-o"></i> <span>Save this car</span></a>
                          <a href="#" data-toggle="modal" data-target="#infoModal" class="btn btn-default" title="Request more info"><i class="fa fa-info"></i> <span>Request more info</span></a>
                          <a href="#" data-toggle="modal" data-target="#testdriveModal" class="btn btn-default" title="Book a test drive"><i class="fa fa-calendar"></i> <span>Book a test drive</span></a>
                          <a href="#" data-toggle="modal" data-target="#offerModal" class="btn btn-default" title="Make an offer"><i class="fa fa-dollar"></i> <span>Make an offer</span></a>
                          <a href="#" data-toggle="modal" data-target="#sendModal" class="btn btn-default" title="Send to a friend"><i class="fa fa-send"></i> <span>Send to a friend</span></a>
                          <a href="#" class="btn btn-default" title="Download Manual"><i class="fa fa-book"></i> <span>Download Manual</span></a>
                          <a href="javascript:void(0)" onclick="window.print();" class="btn btn-default" title="Print"><i class="fa fa-print"></i> <span>Print</span></a>
                      </div> --}}
                      <div class="btn btn-info price">Rp {{ number_format($motor->price) }}</div>
                  </div>
                  <div class="row">
                      <div class="col-md-8">
                          <div class="single-listing-images">
                              <div class="featured-image format-image">
                                  <a href="{{ $motor->image }}" data-rel="prettyPhoto[gallery]" class="media-box"><img src="{{ $motor->image }}" alt=""></a>
                              </div>
                              <div class="additional-images">
                                      <ul class="owl-carousel" data-columns="4" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-mobile="3">
                                          @if (!count($motor->gallery->images) == 0)
                                            @foreach ($motor->gallery->images as $image)
                                              <li class="item format-image"> <a href="{{ $image->image }}" data-rel="prettyPhoto[gallery]" class="media-box"><img src="{{ $image->image }}" alt=""></a></li>
                                            @endforeach
                                          @else
                                              <li class="item format-image"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                              <li class="item format-image"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                              <li class="item format-image"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                              <li class="item format-image"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                          @endif
                                      </ul>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="sidebar-widget widget">
                              <ul class="list-group">
                                  <li class="list-group-item"> <span class="badge">Year</span> {{ $motor->year }}</li>
                                  <li class="list-group-item"> <span class="badge">Model</span> {{ $motor->category->title }}</li>
                                  <li class="list-group-item"> <span class="badge">Transmission</span> {{ $motor->spec->transmisi }}</li>
                                  <li class="list-group-item"> <span class="badge">Power</span> {{ $motor->spec->volume_langkah }}</li>
                                  <li class="list-group-item"> <span class="badge">Fuel type</span> {{ $motor->spec->sistem_bahan_bakar }}</li>
                              </ul>
                          </div>
                          <div class="sidebar-widget widget calculator-widget">
                              <h4>Simulasi Kredit</h4>
                              <form name="angsuranForm">
                                  <div class="loan-calculations">
                                      <input type="text" name="harga" class="form-control" id="harga"  placeholder="Harga" value="{{ $motor->price }}">
                                      <input type="text" class="form-control" name="dp" id="dp" placeholder="DP 1000000 - 2000000" autofocus>
                                      <select class="form-control" name="tempo" id="estimasi">
                                        <option value="11"> 11 Bulan</option>
                                        <option value="23"> 23 Bulan</option>
                                        <option value="35"> 35 Bulan</option>
                                      </select>
                                      <div class="form-group">
                                          <button type="button" onclick="hitungKredit()" name="button" class="btn btn-primary">Hitung</button>
                                      </div>
                                  </div>
                                  <div class="calculations-result">
                                    <span class="meta-data">Biaya angsuran yang di kenakan</span>
                                      <span class="loan-amount" id="test"></span>
                                  </div>
                              </form>

                      </div>
                  </div>
                <div class="spacer-50"></div>
                  <div class="row">
                    <div class="col-md-8">
                          <div class="tabs vehicle-details-tabs">
                              <ul class="nav nav-tabs">
                                  <li class="active"> <a data-toggle="tab" href="#vehicle-overview">Deskripsi</a></li>
                                  <li> <a data-toggle="tab" href="#vehicle-specs">Spesifikasi</a></li>
                              </ul>
                              <div class="tab-content">
                                  <div id="vehicle-overview" class="tab-pane fade in active">
                                      <p>{!! $motor->desc !!}</p>
                                  </div>
                                  <div id="vehicle-specs" class="tab-pane fade">
                                      <div class="accordion" id="toggleArea">
                                          <div class="accordion-group panel">
                                            <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne"> Mesin <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                            <div id="collapseOne" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                  <table class="table-specifications table table-striped table-hover">
                                                    <tbody>
                                                      <tr>
                                                        <th scope="row">Tipe Mesin :</th>
                                                        <td>{{ $motor->spec->tipe_mesin }}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Sistem Pendingin :</th>
                                                        <td>{{ $motor->spec->sistem_pendingin }}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Sistem Suplai Bahan Bakar :</th>
                                                        <td>{{ $motor->spec->sistem_bahan_bakar }}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Diameter x Langkah :</th>
                                                        <td>{{ $motor->spec->diameter_langkah }}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Volume Langkah :</th>
                                                        <td>{{ $motor->spec->volume_langkah }}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Perbandingan Kompresi :</th>
                                                        <td>{{ $motor->spec->rasio_kompresi }}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Daya Maksimum :</th>
                                                        <td>{{ $motor->spec->daya_maksimum }}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Torsi Maksimum :</th>
                                                        <td>{{ $motor->spec->torsi_maksimum }}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Kopling :</th>
                                                        <td>{{ $motor->spec->tipe_kopling }}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Starter :</th>
                                                        <td>{{ $motor->spec->tipe_starter }}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Busi :</th>
                                                        <td>{{ $motor->spec->tipe_busi }}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Transmisi :</th>
                                                        <td>{{ $motor->spec->transmisi }}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Pola Gigi :</th>
                                                        <td>{{ $motor->spec->pola_gigi }}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Sistem Pengapian :</th>
                                                        <td>{{ $motor->spec->tipe_pengapian }}</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                  </div>
                                            </div>
                                          </div>
                                          <div class="accordion-group panel">
                                            <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo"> Rangka <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                            <div id="collapseTwo" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <table class="table-specifications table table-striped table-hover">
                                                        <tbody>
                                                          <tr>
                                                            <th scope="row">Tipe Rangka :</th>
                                                            <td>{{ $motor->spec->tipe_rangka }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Tipe Suspensi Depan :</th>
                                                            <td>{{ $motor->spec->suspensi_depan }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Tipe Suspensi Belakang :</th>
                                                            <td>{{ $motor->spec->suspensi_belakang }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Ukuran Ban Depan :</th>
                                                            <td>{{ $motor->spec->ban_depan }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Ukuran Ban Belakang :</th>
                                                            <td>{{ $motor->spec->ban_belakang }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Rem Depan :</th>
                                                            <td>{{ $motor->spec->rem_depan }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Rem Belakang :</th>
                                                            <td>{{ $motor->spec->rem_belakang }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Sistem Pengereman :</th>
                                                            <td>{{ $motor->spec->sistem_pengereman }}</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                  </div>
                                            </div>
                                          </div>
                                          <div class="accordion-group panel">
                                            <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird"> Dimensi <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                            <div id="collapseThird" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <table class="table-specifications table table-striped table-hover">
                                                        <tbody>
                                                          <tr>
                                                            <th scope="row">Panjang x Lebar x Tinggi :</th>
                                                            <td>{{ $motor->spec->panjang_lebar_tinggi }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Jarak Sumbu Roda :</th>
                                                            <td>{{ $motor->spec->jarak_roda }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Jarak Terendah ke Tanah :</th>
                                                            <td>{{ $motor->spec->jarak_tanah }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Curb Weight :</th>
                                                            <td>{{ $motor->spec->curb_weight }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Tinggi Tempat Duduk :</th>
                                                            <td>{{ $motor->spec->tinggi_jok }}</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                  </div>
                                            </div>
                                          </div>
                                          <div class="accordion-group panel">
                                            <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseForth"> Kapasitas <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                            <div id="collapseForth" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                      <table class="table-specifications table table-striped table-hover">
                                                        <tbody>
                                                          <tr>
                                                            <th scope="row">Kapasitas Tangki Bahan Bakar :</th>
                                                            <td>{{ $motor->spec->kapasitas_bahan_bakar }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Kapasitas Minyak Pelumas :</th>
                                                            <td>{{ $motor->spec->kapasitas_pelumas }}</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">Kelistrikan :</th>
                                                            <td>{{ $motor->spec->aki }}</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                  </div>
                                            </div>
                                          </div>
                                    </div>
                                      <!-- End Toggle -->
                                  </div>
                              </div>
                      </div>
                          <div class="spacer-50"></div>
                          <!-- Recently Listed Vehicles -->
                          <section class="listing-block recent-vehicles">
                              <div class="listing-header">
                                  <h3>Produk Terkait</h3>
                              </div>
                              <div class="listing-container">
                                  <div class="carousel-wrapper">
                                      <div class="row">
                                          <ul class="owl-carousel carousel-fw" id="vehicle-slider" data-columns="3" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                                            @if (!count($related) == 0)
              																@foreach ($related as $related)
              																	<li class="item">
              																			<div class="vehicle-block format-standard">
              																					<a href="#" class="media-box"><img src="{{ $related->image }}" alt=""></a>
              																					<div class="vehicle-block-content">
              																							<span class="label label-default vehicle-age">{{ $related->year }}</span>
              																							<h5 class="vehicle-title"><a href="#">{{ $related->title }}</a></h5>
              																							<span class="vehicle-cost">Rp {{ number_format($related->price) }}</span>
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
                      </div>
                      <!-- Vehicle Details Sidebar -->
                      <div class="col-md-4 vehicle-details-sidebar sidebar">

                          <!-- Vehicle Enquiry -->
                          <div class="sidebar-widget widget seller-contact-widget">
                              <h4 class="widgettitle">Hubungi Kami</h4>
                              <div class="vehicle-enquiry-foot">
                                  <span class="vehicle-enquiry-foot-ico"><i class="fa fa-phone"></i></span>
                                  <strong>0853 5382 8776</strong>Seller: <a href="#">Naga Mas Motor</a>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </article>
              <div class="clearfix"></div>
          </div>
      </div>
  </div>
  <!-- End Body Content -->
@endsection

@section('scripts')
  <script>

    function hitungKredit() {
      var harga = document.forms["angsuranForm"]["harga"].value;
      var dp = document.forms["angsuranForm"]["dp"].value;
      var tempo = document.forms["angsuranForm"]["tempo"].value;
      var x = (harga - dp) / tempo;
      document.getElementById("test").innerHTML = 'Rp ' + Math.round(x) + '<small>/bulan</small>';
    }

  </script>
@endsection
