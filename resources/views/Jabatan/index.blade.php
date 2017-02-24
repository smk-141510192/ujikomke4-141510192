@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">PT PANASIA GROUP</div>
                <div class="panel-body">
               
<h1><center>JABATAN</center></h1>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('/Jabatan/create')}}" class="btn btn-primary">Tambah Data</a>
<hr>
<div class="form-group"><center>
                    <form action="{{url('Jabatan')}}/?Kode_jabatan=Kode_jabatan">
                    <input type="text" name="Kode_jabatan" placeholder="Cari"></form>
                </center></div>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>No</th>
<th>Kode</th>
<th>Nama Jabatan</th>
<th>Besaran Uang</th>
<th colspan="3"><center>Opsi</center></th>
</tr>
</thead>
<tbody>
	@foreach ($Jabatan as $data)
	<tr>
	<td>{{ $data->id }}</td>
	<td>{{ $data->Kode_jabatan }}</td>
	<td>{{ $data->Nama_jabatan }}</td>
	<td>{{ $data->Besaran_uang }}</td>
	<td><center><a href="{{route('Jabatan.edit', $data->id)}}" class="btn btn-warning">Update</a></center></td>  
	<td>                                            
	<center>{!! Form::open(['method' => 'DELETE', 'route'=>['Jabatan.destroy', $data->id]]) !!}
	{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}</center>
	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
</tbody> 
</table>
@endsection                  
