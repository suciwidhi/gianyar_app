@extends('layouts/base')
@section('main')
<div class="row">
<div class="col-sm-12">
  <h3 class="display-4">Data Penerima bantuan</h3>
  <a href="{{ route('penerima-bantuan.create')}}" class="btn btn-primary mb-4">Tambah Data</a>      
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Alamat</td>
          <td>Desa</td>
          <td>Kecamatan</td>
          <td>Nama Penerima</td>
          <td>Nomor KTP</td>
          <td>Nomor KK</td>
          <td>Jenis Bantuan</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($daftar_penerima_bantuan as $penerima)
        <tr>
            <td>{{$penerima->id}}</td>
            <td>{{Desa::find($penerima->desa_id)}}</td>
            <td>{{Kecamatan::find($penerima->kecamatan_id)}}</td>
            <td>{{$penerima->nama_penerima}}</td>
            <td>{{$penerima->nomor_ktp}}</td>
            <td>{{$penerima->nomor_kk}}</td>
            <td>{{JenisBantuan::find($penerima->jenis_bantuan_id)}}</td>
            <td>
                <a href="{{ route('penerima-bantuan.edit',$penerima->id)}}" class="btn btn-primary">Ubah</a>
            </td>
            <td>
                <form action="{{ route('penerima-bantuan.destroy', $penerima->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection