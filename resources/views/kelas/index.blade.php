@extends('app')
@section('title')
    Data Kelas
@endsection
@section('content')
 <div class="panel panel-default">
 <div class="panel-body">
 <h4><i class="fa fa-user"></i> DAFTAR Kelas</h4><hr>
 <div class=row><div class="col-md-6">
 <a href="{{url('')}}/kelas/create" class="btn btn-primary">
  <i class="fa fa-plus-circle"></i> Tambah Data</a>
 </div><div class="col-md-2"></div><div class="col-md-4">            </div></div><br>
@if(count($kelas))
 <div class="table-responsive">
  <table class="table table-bordered table-striped
          table-hover table-condensed tfix">
   <thead align="center"><tr>
   <td><b>NRP</b></td><td><b>Mata Kuliah</b></td>
   <td><b>Dosen Pengajar</b></td>
   <td colspan="2"><b>MENU</b></td></tr></thead>

   @foreach($kelas as $m)
  <tr><td>{{ $m->kode_kelas }}</td><td>{{ $m->matakuliah }}</td>
  <td>{{ $m->namadosen }}</td><td align="center" width="30px">
  <a href="{{url('')}}/kelas/{{$m->kode_kelas}}/edit" class="btn btn-warning btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a>
  </td><td align="center" width="30px">
  {!! Form::open(array('route' => array('kelas.destroy', $m->kode_kelas),
           'method' => 'delete','style' => 'display:inline')) !!}
  <button class='btn btn-sm btn-danger delete-btn' type='submit'>
  <i class='fa fa-times-circle'></i> Delete </button>
  {!! Form::close() !!} </td> </tr>
  @endforeach
  </table>
  </div>
  @else
    <div class="alert alert-warning">
     <i class="fa fa-exclamation-triangle"></i> Data Kelas belum ada
     </div>
  @endif
  </div></div>
  @endsection
