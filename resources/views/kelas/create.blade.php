@extends('app')
@section('title')
    Tambah Data Kelas
@endsection

@section('content')
<div class="panel panel-default">
<div class="panel-body">
<h4><i class="fa fa-plus-square">
</i> TAMBAH Kelas</h4><hr>
<div class="row"><div class="col-md-3">
<div class="list-group">
<a href="#" class="list-group-item active">
<i class="fa fa-cogs"></i> MENU Kelas  </a>
<a href="{{url('')}}/kelas" class="list-group-item">
<i class="fa fa-refresh"></i> Tampilkan Semua</a>
<a href="{{url('')}}/" class="list-group-item">
<i class="fa fa-home"></i> Home</a>
</div>
</div>

<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-body">
{!! Form::open(array('url' => '/kelas')) !!}
<div class="form-group">
{!! Form::label('kode_kelas', 'Kode Kelas') !!}
{!! Form::text('kode_kelas',null, array('class' => 'form-control','placeholder'=>'Kode Kelas')) !!}</div>
<div class="form-group">
{!! Form::label('kuliah_pemakai', 'Mata Kuliah') !!}
{!! Form::select('kuliah_pemakai', $klh ,null , array('class' => 'form-control')) !!}
</div>
<div class="form-group">
{!! Form::label('nip_pengajar', 'Dosen Pengajar') !!}
{!! Form::select('nip_pengajar', $dsn ,null , array('class' => 'form-control')) !!}
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
