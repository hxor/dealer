@extends('layouts.backend.app')

@section('styles')

@endsection


@section('content')
  <div class="container">

        @include('layouts.backend.partials._bread', ['data' => empty($bread) ? '' : $bread])

        <div class="row">
          <div class="col-lg-9 col-md-8">
            <div class="card-box">
              <h4 class="m-t-0 header-title"><b>Add New Category</b></h4>

              {!! Form::open(['method' => 'POST', 'route' => 'admin.category.store', 'class' => 'data-parsley-validate novalidate']) !!}

                  @include('main.backend.category._form')

              {!! Form::close() !!}

            </div>
          </div>
        </div>
        <!-- end row -->
  </div>
@endsection

@section('scripts')

@endsection
