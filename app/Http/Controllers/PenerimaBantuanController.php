<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PenerimaBantuan;
use App\Kecamatan;
use App\JenisBantuan;
use App\Desa;

class PenerimaBantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar_penerima_bantuan = PenerimaBantuan::all();
        return view('penerima.index', compact('daftar_penerima_bantuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desa = Desa::pluck('desa_nama', 'desa_id');
        $kecamatan = Kecamatan::pluck('nama', 'id');
        $jenis_bantuan = JenisBantuan::pluck('nama', 'id');

        return view('penerima.create')->with([
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'jenis_bantuan' => $jenis_bantuan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penerima_bantuan = new PenerimaBantuan([
            'alamat' => $request->get('alamat'),
            'desa_id' => $request->get('desa_id'),
            'kecamatan_id' => $request->get('kecamatan_id'),
            'nama_penerima' => $request->get('nama_penerima'),
            'nomor_ktp' => $request->get('nomor_ktp'),
            'nomor_kk' => $request->get('nomor_kk'),
            'jenis_bantuan_id' => $request->get('jenis_bantuan_id'),
            'lintang' => $request->get('lintang'),
            'bujur' => $request->get('bujur'),
            'keterangan' => $request->get('keterangan')
        ]);
        $penerima_bantuan->save();
        return redirect('/penerima-bantuan')->with('success', 'Penerima bantuan telah disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penerima_bantuan = PenerimaBantuan::find($id);
        return view('penerima.edit', compact('penerima'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penerima_bantuan = PenerimaBantuan::find($id);
        $penerima_bantuan->alamat = $request->get('alamat');
        $penerima_bantuan->desa_id = $request->get('desa_id');
        $penerima_bantuan->kecamatan_id = $request->get('kecamatan_id');
        $penerima_bantuan->nama_penerima = $request->get('nama_penerima');
        $penerima_bantuan->nomor_ktp = $request->get('nomor_ktp');
        $penerima_bantuan->nomor_kk = $request->get('nomor_kk');
        $penerima_bantuan->jenis_bantuan_id = $request->get('jenis_bantuan_id');
        $penerima_bantuan->lintang = $request->get('lintang');
        $penerima_bantuan->bujur = $request->get('bujur');
        $penerima_bantuan->keterangan = $request->get('keterangan');
     
        $penerima_bantuan->save();        
        return redirect('/penerima-bantuan')->with('success', 'Data penerima bantuan berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerima_bantuan = PenerimaBantuan::find($id);
        $penerima_bantuan->delete();

        return redirect('/penerima-bantuan')->with('success', 'Data penerima bantuan telah dihapus!');
    }
}
