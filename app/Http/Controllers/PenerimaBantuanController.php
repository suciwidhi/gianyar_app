<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\PenerimaBantuan;

class PenerimaBantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerimaBantuan.create');
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
        return redirect('/penerima_bantuan')->with('success', 'Penerima bantuan telah disimpan!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
