@extends('app')
@section('title')
    Edit Kuliah
@endsection
@section('content')
<div class="panel panel-default">
<div class="panel-body">
<h4><i class="fa fa-check-square">
</i> EDIT DATA KULIAH</h4><hr>
<div class="row"><div class="col-md-3">
<div class="list-group">
<a href="#" class="list-group-item active">
<i class="fa fa-cogs"></i> MENU KULIAH</a>
<a href="/kuliah" class="list-group-item">
<i class="fa fa-refresh"></i> Tampilkan Semua</a>
<a href="/" class="list-group-item">
<i class="fa fa-home"></i> Home</a>
</div></div>

<div class="col-md-6">
   <div class="panel panel-default">
 <div class="panel-body">
{!! Form::model($kuliah,['method'=>'PATCH','action'=>['KuliahController@update',$kuliah->kodekuliah]]) !!}
<div class="form-group">
{!! Form::label('kodekuliah', 'Kode Kuliah') !!}
{!! Form::text('kodekuliah',null, array('class' => 'form-control','placeholder'=>'Kode Kuliah')) !!}
</div>
<div class="form-group">
{!! Form::label('matakuliah', 'Nama Kuliah') !!}
{!! Form::text('matakuliah', null, array('class' => 'form-control','placeholder'=>'Nama Kuliah')) !!}
</div>
<div class="form-group">
{!! Form::label('sks', 'Jumlah SKS') !!}
{!! Form::text('sks', null, array('class' => 'form-control','placeholder'=>'Jumlah SKS')) !!}
</div>
{!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
{!! Form::close()!!}
</div></div></div></div></div></div>
@endsection
