<div class="row">
    <div class="col-lg-9 col-md-8">
        <div class="card-box">

            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('title') }}</small>
            </div>

            <div class="col-md-6">
                <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                    {!! Form::label('year', 'Year') !!}
                    {!! Form::number('year', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('year') }}</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                    {!! Form::label('price', 'Price') !!}
                    {!! Form::number('price', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('price') }}</small>
                </div>
            </div>

            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                {!! Form::label('desc', 'Product Description') !!}
                {!! Form::textarea('desc', null, ['class' => 'form-control my-editor', 'required' => 'required', 'rows' => 30]) !!}
                <small class="text-danger">{{ $errors->first('desc') }}</small>
            </div>

        </div>

    </div>


    <div class="col-md-4 col-lg-3">
        <div class="card-box">
            <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                {!! Form::label('category_id', 'Category') !!}
                {!! Form::select('category_id', [''=>'- Select Category -']+App\Models\Category::pluck('title','id')->all(), null, ['id' => 'category_id', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('category_id') }}</small>
            </div>
            <div class="form-group{{ $errors->has('gallery_id') ? ' has-error' : '' }}">
                {!! Form::label('gallery_id', 'Gallery') !!}
                {!! Form::select('gallery_id', [''=>'- Select Gallery -']+App\Models\Gallery::pluck('title','id')->all(), null, ['id' => 'gallery_id', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('gallery_id') }}</small>
            </div>
            <div class="form-group text-right m-b-0">
              <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                Reset
              </button>
              <button class="btn btn-primary waves-effect waves-light" type="submit">
                Submit
              </button>
            </div>
        </div>

        <div class="card-box">
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                {!! Form::label('image', 'Featured Image') !!}
                <div class="input-group">
                  {!! Form::text('image', null, ['id' => 'thumbnail', 'class' => 'form-control', 'readonly' => 'readonly']) !!}
                  <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-default">
                      <i class="fa fa-cloud-upload"></i> Choose
                    </a>
                  </span>
                </div>
                @if (isset($post) && $post->image !== '')
                <img src="{{ $post->image }}" id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;">
                @endif
                <img id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;">
                <small class="text-danger">{{ $errors->first('image') }}</small>
            </div>
        </div>
    </div>

</div>
