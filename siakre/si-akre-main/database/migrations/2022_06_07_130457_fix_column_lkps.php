<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixColumnLkps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('kbkl', function (Blueprint $table) {
            $table->integer('prfsi_noninfokom')->nullable();
        });
        Schema::table('kbkl', function (Blueprint $table) {
            $table->dropColumn('id');
        });
        Schema::table('kbkl', function (Blueprint $table) {
            $table->id();
        });
        Schema::table('mt', function (Blueprint $table) {
            $table->dropColumn('id');
        });
        Schema::table('mt', function (Blueprint $table) {
            $table->id();
        });
        Schema::table('ktw', function (Blueprint $table) {
            $table->dropColumn('id');
        });
        Schema::table('ktw', function (Blueprint $table) {
            $table->id();
        });
        Schema::table('ipk', function (Blueprint $table) {
            $table->dropColumn('id');
        });
        Schema::table('ipk', function (Blueprint $table) {
            $table->id();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
