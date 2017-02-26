@extends('layouts.frontend.app')

@section('content')
  <!-- Start Page header -->
  <div class="page-header parallax" style="background-image:url({{ asset('front/images/motor/banner.png')}});">
    <div class="container">
        <h1 class="page-title">Produk Kami</h1>
      </div>
  </div>
  <!-- Utiity Bar -->
    <div class="utility-bar">
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-8">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">Motor</li>
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
            <div class="row">
                <div class="col-md-3 sidebar">
                    <div class="widget sidebar-widget widget_categories">
                        <h3 class="widgettitle">Kategori Motor</h3>
                        <ul>
                            <li><a href="{{ route('motor')}}">All</a> {{ App\Models\Motor::count() }}</li>
                            @foreach (App\Models\Category::all() as $category)
                              <li><a href="{{ route('motor.cat', $category->slug)}}">{{ $category->title}}</a> {{ $category->motors->count() }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                  <!-- Listing Results -->
                  <div class="col-md-9 results-container">
                      <div class="results-container-in">
                        <div class="waiting" style="display:none;">
                            <div class="spinner">
                                  <div class="rect1"></div>
                                  <div class="rect2"></div>
                                  <div class="rect3"></div>
                                  <div class="rect4"></div>
                                  <div class="rect5"></div>
                              </div>
                          </div>
                        <div id="results-holder" class="results-list-view">
                            @if (!count($motors) == 0)
                              @foreach ($motors as $motor)
                                <!-- Result Item -->
                                <div class="result-item format-standard">
                                    <div class="result-item-image">
                                      <a href="{{ route('motor.detail', $motor->slug) }}" class="media-box"><img src="{{ $motor->image }}" alt=""></a>
                                          <span class="label label-default vehicle-age">{{ $motor->year }}</span>
                                          <div class="result-item-view-buttons">
                                            <a href="{{ route('motor.detail', $motor->slug) }}"><i class="fa fa-plus"></i> View details</a>
                                          </div>
                                      </div>
                                    <div class="result-item-in">
                                        <h4 class="result-item-title"><a href="{{ route('motor.detail', $motor->slug) }}">{{ $motor->title }}</a></h4>
                                      <div class="result-item-cont">
                                              <div class="result-item-block col1">
                                                @if (!$motor->spec == null)
                                                  <ul class="inline">
                                                      <li>{{ $motor->spec->tipe_mesin }}</li>
                                                      <li>{{ $motor->spec->sistem_bahan_bakar }}</li>
                                                      <li>{{ $motor->spec->tipe_pengapian }}</li>
                                                      <li>{{ $motor->spec->kapasitas_bahan_bakar }}</li>
                                                      <li>{{ $motor->spec->transmisi }}</li>
                                                  </ul>
                                                @else
                                                  <ul class="inline">
                                                      <li>Maaf, belum ada detail spesifikasi</li>
                                                  </ul>
                                                @endif
                                              </div>
                                              <div class="result-item-block col2">
                                                  <div class="result-item-pricing">
                                                      <div class="price">{{ number_format($motor->price) }}</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="result-item-features">

                                          </div>
                                      </div>
                                  </div>
                              @endforeach

                              {{ $motors->links('layouts.frontend.partials._pagination') }}
                            @else
                              <div class="format-standard">
                                    <p>Maaf, Belum ada data</p>
                              </div>
                            @endif
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
