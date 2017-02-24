
{!! Form::hidden('motor_id', $idmotor) !!}
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
            <div class="form-group{{ $errors->has('tipe_mesin') ? ' has-error' : '' }}">
                {!! Form::label('tipe_mesin', 'Tipe Mesin') !!}
                {!! Form::text('tipe_mesin', null, ['class' => 'form-control' ]) !!}
                <small class="text-danger">{{ $errors->first('tipe_mesin') }}</small>
            </div>
          </tr>
            <div class="form-group{{ $errors->has('sistem_pendingin') ? ' has-error' : '' }}">
                {!! Form::label('sistem_pendingin', 'Sistem Pendingin') !!}
                {!! Form::text('sistem_pendingin', null, ['class' => 'form-control' ]) !!}
                <small class="text-danger">{{ $errors->first('sistem_pendingin') }}</small>
            </div>
          </tr>
            <div class="form-group{{ $errors->has('sistem_bahan_bakar') ? ' has-error' : '' }}">
                {!! Form::label('sistem_bahan_bakar', 'Sistem Suplai Bahan Bakar') !!}
                {!! Form::text('sistem_bahan_bakar', null, ['class' => 'form-control' ]) !!}
                <small class="text-danger">{{ $errors->first('sistem_bahan_bakar') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('diameter_langkah') ? ' has-error' : '' }}">
                {!! Form::label('diameter_langkah', 'Diameter x Langkah') !!}
                {!! Form::text('diameter_langkah', null, ['class' => 'form-control' ]) !!}
                <small class="text-danger">{{ $errors->first('diameter_langkah') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('volume_langkah') ? ' has-error' : '' }}">
                {!! Form::label('volume_langkah', 'Volume Langkah') !!}
                {!! Form::text('volume_langkah', null, ['class' => 'form-control' ]) !!}
                <small class="text-danger">{{ $errors->first('volume_langkah') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('rasio_kompresi') ? ' has-error' : '' }}">
                {!! Form::label('rasio_kompresi', 'Perbandingan Kompresi') !!}
                {!! Form::text('rasio_kompresi', null, ['class' => 'form-control' ]) !!}
                <small class="text-danger">{{ $errors->first('rasio_kompresi') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('daya_maksimum') ? ' has-error' : '' }}">
                {!! Form::label('daya_maksimum', 'Daya Maksimum') !!}
                {!! Form::text('daya_maksimum', null, ['class' => 'form-control' ]) !!}
                <small class="text-danger">{{ $errors->first('daya_maksimum') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('torsi_maksimum') ? ' has-error' : '' }}">
                {!! Form::label('torsi_maksimum', 'Torsi Maksimum') !!}
                {!! Form::text('torsi_maksimum', null, ['class' => 'form-control' ]) !!}
                <small class="text-danger">{{ $errors->first('torsi_maksimum') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('tipe_kopling') ? ' has-error' : '' }}">
                {!! Form::label('tipe_kopling', 'Tipe Kopling') !!}
                {!! Form::text('tipe_kopling', null, ['class' => 'form-control' ]) !!}
                <small class="text-danger">{{ $errors->first('tipe_kopling') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('tipe_starter') ? ' has-error' : '' }}">
                {!! Form::label('tipe_starter', 'Starter') !!}
                {!! Form::text('tipe_starter', null, ['class' => 'form-control' ]) !!}
                <small class="text-danger">{{ $errors->first('tipe_starter') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('tipe_busi') ? ' has-error' : '' }}">
                {!! Form::label('tipe_busi', 'Busi') !!}
                {!! Form::text('tipe_busi', null, ['class' => 'form-control' ]) !!}
                <small class="text-danger">{{ $errors->first('tipe_busi') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('transmisi') ? ' has-error' : '' }}">
                {!! Form::label('transmisi', 'Transmisi') !!}
                {!! Form::text('transmisi', null, ['class' => 'form-control' ]) !!}
                <small class="text-danger">{{ $errors->first('transmisi') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('tipe_pengapian') ? ' has-error' : '' }}">
                {!! Form::label('tipe_pengapian', 'Sistem Pengapian') !!}
                {!! Form::text('tipe_pengapian', null, ['class' => 'form-control' ]) !!}
                <small class="text-danger">{{ $errors->first('tipe_pengapian') }}</small>
            </div>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="rangka">
      <table class="table table-striped m-0">
        <tbody>
          <tr>
            <div class="form-group{{ $errors->has('tipe_rangka') ? ' has-error' : '' }}">
                {!! Form::label('tipe_rangka', 'Tipe Rangka') !!}
                {!! Form::text('tipe_rangka', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('tipe_rangka') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('suspensi_depan') ? ' has-error' : '' }}">
                {!! Form::label('suspensi_depan', 'Tipe Suspensi Depan') !!}
                {!! Form::text('suspensi_depan', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('suspensi_depan') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('suspensi_belakang') ? ' has-error' : '' }}">
                {!! Form::label('suspensi_belakang', 'Tipe Suspensi Belakang') !!}
                {!! Form::text('suspensi_belakang', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('suspensi_belakang') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('ban_depan') ? ' has-error' : '' }}">
                {!! Form::label('ban_depan', 'Ukuran Ban Depan') !!}
                {!! Form::text('ban_depan', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('ban_depan') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('ban_belakang') ? ' has-error' : '' }}">
                {!! Form::label('ban_belakang', 'Ukuran Ban Belakang') !!}
                {!! Form::text('ban_belakang', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('ban_belakang') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('rem_depan') ? ' has-error' : '' }}">
                {!! Form::label('rem_depan', 'Rem Depan') !!}
                {!! Form::text('rem_depan', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('rem_depan') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('rem_belakang') ? ' has-error' : '' }}">
                {!! Form::label('rem_belakang', 'Rem Belakang') !!}
                {!! Form::text('rem_belakang', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('rem_belakang') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('sistem_pengereman') ? ' has-error' : '' }}">
                {!! Form::label('sistem_pengereman', 'Sistem Pengereman') !!}
                {!! Form::text('sistem_pengereman', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('sistem_pengereman') }}</small>
            </div>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="dimensi">
      <table class="table table-striped m-0">
        <tbody>
          <tr>
            <div class="form-group{{ $errors->has('panjang_lebar_tinggi') ? ' has-error' : '' }}">
                {!! Form::label('panjang_lebar_tinggi', 'Panjang x Lebar x Tinggi') !!}
                {!! Form::text('panjang_lebar_tinggi', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('panjang_lebar_tinggi') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('jarak_roda') ? ' has-error' : '' }}">
                {!! Form::label('jarak_roda', 'Jarak Sumbu Roda') !!}
                {!! Form::text('jarak_roda ', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('jarak_roda ') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('jarak_tanah') ? ' has-error' : '' }}">
                {!! Form::label('jarak_tanah', 'Jarak Terendah ke Tanah') !!}
                {!! Form::text('jarak_tanah', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('jarak_tanah') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('curb_weight') ? ' has-error' : '' }}">
                {!! Form::label('curb_weight', 'Curb Weight') !!}
                {!! Form::text('curb_weight', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('curb_weight') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('tinggi_jok') ? ' has-error' : '' }}">
                {!! Form::label('tinggi_jok', 'Tinggi Tempat Duduk') !!}
                {!! Form::text('tinggi_jok', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('tinggi_jok') }}</small>
            </div>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="kapasitas">
      <table class="table table-striped m-0">
        <tbody>
          <tr>
            <div class="form-group{{ $errors->has('kapasitas_bahan_bakar') ? ' has-error' : '' }}">
                {!! Form::label('kapasitas_bahan_bakar', 'Kapasitas Tangki Bahan Bakar') !!}
                {!! Form::text('kapasitas_bahan_bakar', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('kapasitas_bahan_bakar') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('kapasitas_pelumas') ? ' has-error' : '' }}">
                {!! Form::label('kapasitas_pelumas', 'Kapasitas Minyak Pelumas') !!}
                {!! Form::text('kapasitas_pelumas', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('kapasitas_pelumas') }}</small>
            </div>
          </tr>
          <tr>
            <div class="form-group{{ $errors->has('aki') ? ' has-error' : '' }}">
                {!! Form::label('aki', 'Kelistrikan') !!}
                {!! Form::text('aki', null, ['class' => 'form-control',]) !!}
                <small class="text-danger">{{ $errors->first('aki') }}</small>
            </div>
          </tr>
        </tbody>
      </table>
    </div>
</div>

<div class="form-group text-right m-b-0">
  <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
    Reset
  </button>
  <button class="btn btn-primary waves-effect waves-light" type="submit">
    Submit
  </button>
</div>
