<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenerimaBantuan extends Model
{
    protected $table = 'penerima_bantuan';
    public $timestamps = false;
    protected $fillable = [
        'alamat',
        'desa_id',
        'kecamatan_id',
        'nama_penerima',
        'nomor_ktp',
        'nomor_kk',
        'jenis_bantuan_id',
        'lintang',
        'bujur',
        'keterangan'
    ];
}
