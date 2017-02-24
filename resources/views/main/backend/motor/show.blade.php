@extends('layouts.backend.app')

@section('styles')
  <link href="{{ asset('back/plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('back/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('content')
  <div class="container">

        @include('layouts.backend.partials._bread', ['data' => empty($bread) ? '' : $bread])

        <div class="row">
          <div class="col-sm-12">
            <div class="card-box">
              <h4 class="m-t-0 header-title"><b>Detail Motor | {{ $motor->title }}</b></h4>
              <table class="table table-striped m-0">
                <tbody>
                  <tr>
                    <th scope="row">Nama Produk</th>
                    <td>{{ $motor->title }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Tahun</th>
                    <td>{{ $motor->year }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Harga</th>
                    <td>Rp {{ number_format($motor->price) }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="card-box">
              <h4 class="m-t-0 header-title"><b>Photo | {{ $motor->title }}</b></h4>
              <div class="owl-carousel owl-theme" id="owl-multi">
                  @foreach ($motor->gallery->images as $image)
                    <div class="item">
                      <img src="{{ $image->image }}" />
                    </div>
                  @endforeach
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="card-box">
              <h4 class="m-t-0 header-title"><b>Deskripsi Motor | {{ $motor->title }}</b></h4>
              <p>{!! $motor->desc !!}</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="card-box">
              <h4 class="m-t-0 header-title"><b>Spesifikasi | {{ $motor->title }}</b></h4>
              @if (!$motor->spec == null)
                <ul class="nav nav-tabs tabs">
                    <li class="active tab">
                        <a href="#mesin" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                            <span class="hidden-xs">Mesin</span>
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#rangka" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                            <span class="hidden-xs">Rangka</span>
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#dimensi" data-toggle="tab" aria-expanded="true">
                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                            <span class="hidden-xs">Dimensi</span>
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#kapasitas" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Kapasitas</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="mesin">
                      <table class="table table-striped m-0">
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
                    <div class="tab-pane" id="rangka">
                      <table class="table table-striped m-0">
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
                    <div class="tab-pane" id="dimensi">
                      <table class="table table-striped m-0">
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
                    <div class="tab-pane" id="kapasitas">
                      <table class="table table-striped m-0">
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
                <a href="{{ route('admin.spec.edit',[$motor->id, $motor->spec->id]) }}">
                  <button type="button" name="edit" class="btn btn-warning">Edit Spesifikasi</button>
                </a>
                {!! Form::model($motor->spec, ['route' => ['admin.spec.delete', $motor->id, $motor->spec->id], 'method' => 'DELETE', 'class' => 'pull-right']) !!}

                    <button type="submit" name="delete" class="btn btn-danger js-submit-confirm">Hapus Spesifikasi</button>

                {!! Form::close() !!}
              @else
                <div class="">
                  <p>Tidak Ada Data Spesifikasi</p>
                  <a href="{{ route('admin.spec.create', $motor->id) }}">
                    <button type="button" name="create" class="btn btn-default">Tambah Spesifikasi</button>
                  </a>
                </div>
              @endif
            </div>
          </div>
        </div>


  </div>
@endsection

@section('scripts')
  <script src="{{ asset('back/plugins/owl.carousel/dist/owl.carousel.min.js') }}"></script>
  <script type="text/javascript">
      jQuery(document).ready(function($) {
          //Owl-Multi
          $('#owl-multi').owlCarousel({
            loop:true,
            margin:20,
            nav:false,
            autoplay:true,
            responsive:{
                    0:{
                        items:1
                    },
                    480:{
                        items:2
                    },
                    700:{
                        items:4
                    },
                    1000:{
                        items:3
                    },
                    1100:{
                        items:5
                    }
                }
          })
      });
  </script>
@endsection
