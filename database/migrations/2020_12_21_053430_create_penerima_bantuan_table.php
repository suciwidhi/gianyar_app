<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaBantuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerima_bantuan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alamat', 128)->nullable();
            $table->integer('desa_id')->nullable();
            $table->integer('kecamatan_id')->nullable();
            $table->string('nama_penerima', 128)->nullable();
            $table->string('nomor_ktp', 128)->nullable();
            $table->string('nomor_kk', 128)->nullable();
            $table->integer('jenis_bantuan_id')->nullable();
            $table->double('lintang')->nullable();
            $table->double('bujur')->nullable();
            $table->string('keterangan', 512)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerima_bantuan');
    }
}
