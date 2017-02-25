@extends('layouts.frontend.app')

@section('content')
  <!-- Start Page header -->
  <div class="page-header parallax" style="background-image:url({{ asset('front/images/motor/banner.png')}});">
    <div class="container">
        <h1 class="page-title">Tentang Kami</h1>
      </div>
  </div>
  <div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="uppercase strong">Siapa dan<br> yang kami lakukan</h1>
                  </div>
                  <div class="col-md-6">
                    <p>Banyak keuntungan dan bonus untuk semua pelanggan. Ayo, datang ke dealer kami sekarang. Pelayanan yang baik juga ramah bisa Anda rasakan. Ingin kredit motor dengan DP ringan ? Datang saja ke Naga Mas Motor</p>
                    <p>Temukan motor Honda yang sesuai dengan Anda di sini. Dengan penawaran menarik dan DP ringan yang bisa Anda dapatkan. Hanya di Naga Mas Motor. Dealer resmi Honda</p>
                  </div>
              </div>
              <hr class="fw">
        </div>
      </div>
    </div>
@endsection
