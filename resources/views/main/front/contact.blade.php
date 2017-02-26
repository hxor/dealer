@extends('layouts.frontend.app')

@section('content')
  <div class="page-header parallax" style="background-image:url({{ asset('front/images/motor/banner.png')}});">
    <div class="container">
        <h1 class="page-title">Kontak Kami</h1>
      </div>
  </div>
  <!-- Utiity Bar -->
    <div class="utility-bar">
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-8">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">Kontak Kami</li>
                    </ol>
              </div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                </div>
            </div>
        </div>
    </div>
  <div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">
            <div class="listing-header margin-40">
                <h2>Kontak Kami</h2>
              </div>
            <div class="row">
                <div class="col-md-3 col-sm-4">
                  <i class="fa fa-home"></i></span> <b>Naga Mas Motor</b><br>
                  Jl. Brigjend Dharsono <br>
                  No.8 By Pass Cirebon, Indonesia<br><br>
                  <i class="fa fa-phone"></i> <b>0853 5382 8776</b><br>
                  <i class="fa fa-envelope"></i> <a href="mailto:example@info.com">imamsyarifudin321@gmail.com</a><br><br>
                  </div>
                  <div class="col-md-9 col-sm-8">
                      <iframe width="780" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=Honda%20Naga%20MAS%2C%20Jalan%20Brigjen%20Darsono%2C%20Sunyaragi%2C%20Kota%20Cirebon%2C%20Jawa%20Barat%2C%20Indonesia&key=AIzaSyCnvEcsaahsU3iFjzG3-UskjjqJeEpP9t4" allowfullscreen></iframe>
                  </div>
              </div>
        </div>
      </div>
</div>
@endsection
