@extends('layouts/base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-4">Tambah Penerima Bantuan</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('penerima-bantuan.store') }}">
          @csrf
          <div class="form-group">
              <label for="nama_penerima">Nama Penerima:</label>
              <input type="text" class="form-control" name="nama_penerima"/>
          </div>
          <div class="form-group">
              <label for="nomor_ktp">Nomor KTP:</label>
              <input type="text" class="form-control" name="nomor_ktp"/>
          </div>
          <div class="form-group">
              <label for="nomor_kk">Nomor KK:</label>
              <input type="text" class="form-control" name="nomor_kk"/>
          </div>
          <div class="form-group">    
              <label for="alamat">Alamat:</label>
              <input type="text" class="form-control" name="alamat"/>
          </div>          
          <div class="form-group">
              <label for="desa">Desa:</label>
              <select name="desa" id="jenis desa">
                @foreach($desa as $id => $nama)
                <option value="{{ $id }}">{{ $nama }}</option>
                @endforeach
              </select>
          </div>          
          <div class="form-group">
              <label for="kecamatan">Kecamatan:</label>
              <select name="kecamatan" id="jenis kecamatan">
                @foreach($kecamatan as $id => $nama)
                <option value="{{ $id }}">{{ $nama }}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="jenis_bantuan">Jenis Bantuan:</label>
              <select name="jenis_bantuan" id="jenis bantuan">
                @foreach($jenis_bantuan as $id => $nama)
                <option value="{{ $id }}">{{ $nama }}</option>
                @endforeach
              </select>
          </div>                      
          <button type="submit" class="btn btn-primary">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection