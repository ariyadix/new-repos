<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJcmb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jcmb', function (Blueprint $table) {
            $table->string('id')->unique()->primary();
            $table->integer('ta')->nullable();
            $table->integer('dy_tmpng')->nullable();
            $table->integer('jcm_pendftr')->nullable();
            $table->integer('jcm_lulus')->nullable();
            $table->integer('jmb_reg')->nullable();
            $table->integer('jmb_transfer')->nullable();
            $table->integer('jma_reg')->nullable();
            $table->integer('jma_transfer')->nullable();
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
        Schema::dropIfExists('jcmb');
    }
}
