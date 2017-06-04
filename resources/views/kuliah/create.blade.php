@extends('app')
@section('title')
    Tambah Data Kuliah
@endsection

@section('content')
<div class="panel panel-default">
<div class="panel-body">
<h4><i class="fa fa-plus-square">
</i> TAMBAH kuliah</h4><hr>
<div class="row"><div class="col-md-3">
<div class="list-group">
<a href="#" class="list-group-item active">
<i class="fa fa-cogs"></i> MENU kuliah  </a>
<a href="{{url('')}}/kuliah" class="list-group-item">
<i class="fa fa-refresh"></i> Tampilkan Semua</a>
<a href="{{url('')}}/" class="list-group-item">
<i class="fa fa-home"></i> Home</a>
</div>
</div>

<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-body">
{!! Form::open(array('url' => '/kuliah')) !!}
<div class="form-group">
{!! Form::label('kodekuliah', 'Kode Kuliah') !!}
{!! Form::text('kodekuliah',null, array('class' => 'form-control','placeholder'=>'Kode Kuliah')) !!}</div>
<div class="form-group">
{!! Form::label('matakuliah', 'Nama Matakuliah') !!}
{!! Form::text('matakuliah', null, array('class' =>
    'form-control','placeholder'=>'Nama Matakuliah')) !!}
</div>
<div class="form-group">
{!! Form::label('sks', 'Jumlah SKS') !!}
{!! Form::text('sks', null, array('class' =>
    'form-control','placeholder'=>'Jumlah SKS')) !!}
</div>
{!! Form::button('<i class="fa fa-plus-square"></i>'.
    ' Simpan', array('type' => 'submit', 'class'
     => 'btn btn-primary'))!!}
{!! Form::button('<i class="fa fa-times"></i>'.
     ' Reset', array('type' => 'reset', 'class'
     => 'btn btn-danger'))!!}
{!! Form::close()!!}
</div></div></div></div></div></div>
@endsection
