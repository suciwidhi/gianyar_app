<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desa', function (Blueprint $table) {
            $table->unsignedInteger('desa_id');
            $table->integer('desa_kecamatan_id')->nullable();
            $table->string('desa_nama', 64)->nullable();
            $table->string('desa_kode', 64)->nullable();
            $table->integer('desa_datasosial')->nullable();
            $table->integer('desa_bltdd')->nullable();
            $table->integer('desa_kemenpar')->nullable();
            $table->integer('desa_semb_bup')->nullable();
            $table->integer('desa_semb_prov')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desa');
    }
}
