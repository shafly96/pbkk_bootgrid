<?php

namespace App\Http\Controllers;

use DB;
use App\kelas;
use App\mhs;
use App\ambil_matkul;
use Illuminate\Http\Request;

class AmbilMatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ambilnya = DB::table('ambil_matkuls')->join('mhs', 'mhs.nrp', '=', 'ambil_matkuls.nrp_pengambil')
                           ->join('kelas', 'kelas.kode_kelas', '=', 'ambil_matkuls.tempat_kelas')->get();
      return view('matkul.index', compact('ambilnya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mhs = mhs::pluck('nama', 'nrp');
        $kelas = kelas::pluck('kode_kelas', 'kode_kelas');
        return view('matkul.create', compact('mhs', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ambil_matkul::create($request->all());
        return redirect('/ambilmatkul');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ambil_matkul  $ambil_matkul
     * @return \Illuminate\Http\Response
     */
    public function show(ambil_matkul $ambil_matkul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ambil_matkul  $ambil_matkul
     * @return \Illuminate\Http\Response
     */
    public function edit($ambil_matkul)
    {
        $ambilnya = ambil_matkul::findOrFail($ambil_matkul);
        $mhs = mhs::pluck('nama', 'nrp');
        $kelas = kelas::pluck('kode_kelas', 'kode_kelas');
        return view('matkul.edit', compact('ambilnya', 'mhs', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ambil_matkul  $ambil_matkul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ambil_matkul)
    {
        $ambilnya = ambil_matkul::findOrFail($ambil_matkul);
        $ambilnya->update($request->all());
        return redirect('/ambilmatkul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ambil_matkul  $ambil_matkul
     * @return \Illuminate\Http\Response
     */
    public function destroy($ambil_matkul)
    {
        $ambilnya = ambil_matkul::findOrFail($ambil_matkul);
        $ambilnya->delete();
        return redirect('/ambilmatkul');
    }
}
