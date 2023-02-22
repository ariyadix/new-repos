<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLkpsBulkTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('reratadtpr', function (Blueprint $table) {
            $table->id();
            $table->string('nm_dosen')->nullable();
            $table->integer('sks_pss')->nullable();
            $table->integer('skd_psl_pts')->nullable();
            $table->integer('skd_ptl')->nullable();
            $table->integer('skd_penelitian')->nullable();
            $table->integer('skd_pengmas')->nullable();
            $table->integer('sksmen_pts')->nullable();
            $table->integer('sksmen_ptl')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('prodi_id')->nullable();
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });

        Schema::create('ktk', function (Blueprint $table) {
            $table->id();
            $table->string('jtk')->nullable();
            $table->integer('jtk_s3')->nullable();
            $table->integer('jtk_s2')->nullable();
            $table->integer('jtk_s1')->nullable();
            $table->integer('jtk_d4')->nullable();
            $table->integer('jtk_d3')->nullable();
            $table->integer('jtk_d2')->nullable();
            $table->integer('jtk_d1')->nullable();
            $table->integer('jtk_sm')->nullable();
            $table->string('uk')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('prodi_id')->nullable();
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });

        Schema::create('spps', function (Blueprint $table) {
            $table->id();
            $table->string('sd')->nullable();
            $table->integer('jml')->nullable();
            $table->string('bukti')->nullable();
            $table->string('ket')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('prodi_id')->nullable();
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });

        Schema::create('addsi', function (Blueprint $table) {
            $table->id();
            $table->string('jns_data')->nullable();
            $table->integer('sppdd_sm')->nullable();
            $table->integer('sppdd_komtj')->nullable();
            $table->integer('sppdd_komlan')->nullable();
            $table->integer('sppdd_komwan')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('prodi_id')->nullable();
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });

        Schema::create('sarpra', function (Blueprint $table) {
            $table->id();
            $table->string('sar_pra')->nullable();
            $table->integer('dy_tamp')->nullable();
            $table->integer('luasr')->nullable();
            $table->integer('jmd')->nullable();
            $table->integer('jam_lay')->nullable();
            $table->integer('prngkt')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('prodi_id')->nullable();
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });

        Schema::create('ipk', function (Blueprint $table) {
            $table->string('id')->unique()->primary();
            $table->integer('tl')->nullable();
            $table->integer('jml_lulusan')->nullable();
            $table->integer('ipk_min')->nullable();
            $table->integer('ipk_rerata')->nullable();
            $table->integer('ipk_maks')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('prodi_id')->nullable();
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });

        Schema::create('ktw', function (Blueprint $table) {
            $table->string('id')->unique()->primary();
            $table->integer('ta')->nullable();
            $table->integer('jmd')->nullable();
            $table->integer('jml_6')->nullable();
            $table->integer('jml_5')->nullable();
            $table->integer('jml_4')->nullable();
            $table->integer('jml_3')->nullable();
            $table->integer('jml_2')->nullable();
            $table->integer('jml_1')->nullable();
            $table->integer('akhir_ts')->nullable();
            $table->integer('jl_ats')->nullable();
            $table->integer('rerata_masastudi')->nullable();
            $table->integer('jml_mhs')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('prodi_id')->nullable();
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });

        Schema::create('kpl', function (Blueprint $table) {
            $table->id();
            $table->string('jns_kemp')->nullable();
            $table->integer('tkp_ps')->nullable();
            $table->integer('tkp_b')->nullable();
            $table->integer('tkp_c')->nullable();
            $table->integer('tkp_k')->nullable();
            $table->string('rnc_tndlnjt')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('prodi_id')->nullable();
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });

        Schema::create('mt', function (Blueprint $table) {
            $table->string('id')->unique()->primary();
            $table->integer('tl')->nullable();
            $table->integer('jml_lus')->nullable();
            $table->integer('jml_lust')->nullable();
            $table->integer('rerata_tunggu')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('prodi_id')->nullable();
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });

        Schema::create('kbkl', function (Blueprint $table) {
            $table->string('id')->unique()->primary();
            $table->integer('tl')->nullable();
            $table->integer('jml_lus')->nullable();
            $table->integer('lus_trlck')->nullable();
            $table->integer('prfsi_infokom')->nullable();
            $table->integer('prfsi_non_info')->nullable();
            $table->integer('ltk_multi')->nullable();
            $table->integer('ltk_nas')->nullable();
            $table->integer('ltk_wir')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('prodi_id')->nullable();
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });

        Schema::create('pnpkm', function (Blueprint $table) {
            $table->id();
            $table->string('dtpr')->nullable();
            $table->integer('pub_infokom')->nullable();
            $table->integer('pen_infokom')->nullable();
            $table->integer('pen_infokomHKI')->nullable();
            $table->integer('pkm_infokomadop')->nullable();
            $table->integer('pkm_infokomhki')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('prodi_id')->nullable();
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reratadtpr');
        Schema::dropIfExists('ktk');
        Schema::dropIfExists('spps');
        Schema::dropIfExists('addsi');
        Schema::dropIfExists('sarpra');
        Schema::dropIfExists('ipk');
        Schema::dropIfExists('ktw');
        Schema::dropIfExists('kpl');
        Schema::dropIfExists('mt');
        Schema::dropIfExists('kbkl');
        Schema::dropIfExists('pnpkm');
    }
}
