@extends('app')
@section('title')
    Tambah Data Pengambilan Matkul
@endsection

@section('content')
<div class="panel panel-default">
<div class="panel-body">
<h4><i class="fa fa-plus-square">
</i> TAMBAH Ambil Matkul</h4><hr>
<div class="row"><div class="col-md-3">
<div class="list-group">
<a href="#" class="list-group-item active">
<i class="fa fa-cogs"></i> MENU Ambil Matkul  </a>
<a href="/ambilmatkul" class="list-group-item">
<i class="fa fa-refresh"></i> Tampilkan Semua</a>
<a href="/" class="list-group-item">
<i class="fa fa-home"></i> Home</a>
</div>
</div>

<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-body">
  {!!Form::model($ambilnya,['method'=>'PATCH',
    'action'=>['AmbilMatkulController@update',$ambilnya->id]]) !!}
<div class="form-group">
{!! Form::label('tempat_kelas', 'Kode Kelas') !!}
{!! Form::select('tempat_kelas', $kelas ,null, array('class' => 'form-control','placeholder'=>'Kode Kelas')) !!}</div>
<div class="form-group">
{!! Form::label('nrp_pengambil', 'Nama Mahasiswa') !!}
{!! Form::select('nrp_pengambil', $mhs, null, array('class' =>  'form-control','placeholder'=>'Nama Mahasiswa')) !!}
</div>
<div class="form-group">
{!! Form::label('uts', 'Nilai UTS') !!}
{!! Form::text('uts', null, array('class' =>
    'form-control','placeholder'=>'Nilai UTS')) !!}
</div>
<div class="form-group">
{!! Form::label('uas', 'Nilai UAS') !!}
{!! Form::text('uas', null, array('class' =>
    'form-control','placeholder'=>'Nilai UAS')) !!}
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
