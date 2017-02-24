@extends('layouts.backend.app')

@section('styles')

@endsection


@section('content')
  <div class="container">

        @include('layouts.backend.partials._bread', ['data' => empty($bread) ? '' : $bread])

        <div class="row">
          <div class="col-sm-12">
            <div class="card-box">
              <h4 class="m-t-0 header-title"><b>Tambah/Ubah Spesifikasi</b></h4>
              {!! Form::model($spec, ['route' => ['admin.spec.update', $idmotor, $spec->id], 'method' => 'PUT']) !!}

                  @include('main.backend.motor._form-spec')

              {!! Form::close() !!}
            </div>
          </div>
        </div>


  </div>
@endsection

@section('scripts')

@endsection
