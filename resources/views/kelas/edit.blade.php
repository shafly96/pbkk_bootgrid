@extends('app')
@section('title')
    Edit Mahasiswa
@endsection
@section('content')
<div class="panel panel-default">
<div class="panel-body">
<h4><i class="fa fa-check-square">
</i> EDIT MAHASISWA</h4><hr>
<div class="row"><div class="col-md-3">
<div class="list-group">
  <a href="#" class="list-group-item active">
    <i class="fa fa-cogs"></i> MENU KELAS
  </a>
  <a href="{{url('')}}/kelas" class="list-group-item">
  <i class="fa fa-refresh"></i> Tampilkan Semua</a>
  <a href="{{url('')}}/" class="list-group-item">
  <i class="fa fa-home"></i> Home</a>
</div>
</div>
<div class="col-md-6">
   <div class="panel panel-default">
 <div class="panel-body">
   {!!Form::model($kelasnya,['method'=>'PATCH',
     'action'=>['KelasController@update',$kelasnya->kode_kelas]]) !!}
   <div class="form-group">
   {!! Form::label('kode_kelas', 'Kode Kelas') !!}
   {!! Form::text('kode_kelas',null, array('class' => 'form-control','placeholder'=>'Kode Kelas')) !!}
   </div><div class="form-group">
   {!! Form::label('kode_kuliah', 'Mata Kuliah') !!}
   {!! Form::select('kode_kuliah', $kuliahnya, null, array('class' => 'form-control','placeholder'=>'Mata Kuliah')) !!}
    </div><div class="form-group">
   {!! Form::label('nip_pengajar', 'Dosen Pengajar') !!}
   {!! Form::select('nip_pengajar', $dosennya ,null ,
       array('class' => 'form-control')) !!}
   </div>
   {!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
   {!! Form::close()!!}
   </div></div></div></div></div></div>
   @endsection
