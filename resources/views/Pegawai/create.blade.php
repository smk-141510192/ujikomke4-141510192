
@extends('layouts.up')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Tambah Data Pegawai</div>
                <div class="panel-body">
                <hr>
                    {!!Form::open(['url' => '/Pegawai', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'files' => true]) !!}
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="permission" class="col-md-4 control-label">Permission</label>

                            <div class="col-md-6">
                               <select class="form-control" name="permission">
                                    <option value="Admin">Admin</option>
                                    <option value="HRD">HRD</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>                        
                        <hr>

                        <div class="form-group{{ $errors->has('Nip') ? ' has-error' : '' }}">
                            <label for="Nip" class="col-md-4 control-label">NIP</label>
                            <div class="col-md-6">
                                <input id="Nip" type="text" class="form-control" name="Nip">
                            </div>
                        </div>
                    

                        <div class="form-group{{ $errors->has('Kode_jabatan') ? ' has-error' : '' }}">
                            <label for="Kode_jabatan" class="col-md-4 control-label">Nama Jabatan</label>
                            <div class="col-md-6">
                                <select name="Kode_jabatan" class="form-control">
                                    @foreach($Jabatan as $data)
                                        <option value="{{ $data->id }}">{{ $data->Nama_jabatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Kode_golongan') ? ' has-error' : '' }}">
                            <label for="Kode_golongan" class="col-md-4 control-label">Nama Golongan</label>
                            <div class="col-md-6">
                                <select name="Kode_golongan" class="form-control">
                                    @foreach($Golongan as $data)
                                        <option value="{{ $data->id }}">{{ $data->Nama_golongan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('Photo') ? ' has-error' : '' }}">
                            <label for="Photo" class="col-md-4 control-label">Photo</label>
                            <div class="col-md-6">
                                <input id="Photo" type="file" class="form-control" name="Photo" value="{{ old('Photo') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                  simpan
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
               </div>
           </div>
       </div>
    </div>
</div>  
@endsection