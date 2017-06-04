@extends('app')
@section('title')
    Data Ambil Matkul
@endsection
@section('content')
<div class="panel panel-default">
  <div class="panel-body">
    <h4><i class="fa fa-university"></i> DAFTAR AMBIL MATKUL</h4><hr>
    <div class=row>
      <div class="col-md-6">
        <a href="{{url('')}}/ambilmatkul/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-4"></div>
    </div><br>

@if($ambilnya->count())
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover table-condensed tfix">
      <thead align="center">
        <tr><td><b>Kode Kelas</b></td>
        <td><b>Mahasiswa Pengambil</b></td>
        <td><b>Nilai UTS</b></td>
        <td><b>Nilai UAS</b></td>
        <td colspan="2"><b>MENU</b></td></tr>
      </thead>
      @foreach($ambilnya as $m)
      <tr><td>{{ $m->kode_kelas }}</td>
      <td>{{ $m->nama }}</td>
      <td>{{ $m->uts }}</td>
      <td>{{ $m->uas }}</td>
      <td align="center" width="30px">
      <a href="{{url('')}}/ambilmatkul/{{$m->id}}/edit" class="btn btn-warning btn-sm"
      role="button"><i class="fa fa-pencil-square"></i> Edit</a></td>
      <td align="center" width="30px">
      {!! Form::open(array('route' => array('ambilmatkul.destroy', $m->id),
                           'method' => 'delete',
                           'style' => 'display:inline')) !!}
      <button class='btn btn-sm btn-danger delete-btn' type='submit'>
      <i class='fa fa-times-circle'></i> Delete </button>
      {!! Form::close() !!}
      </td>
       </tr>
      @endforeach
</table>
</div>
@else
 <div class="alert alert-warning">
 <i class="fa fa-exclamation-triangle"></i> Data Ambil Matkul tidak Ada
  </div>
@endif
</div></div>
@endsection
