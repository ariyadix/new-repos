<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnAddsi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('addsi', function (Blueprint $table) {
            $table->longText('sppdd_sm')->change();
            $table->longText('sppdd_komtj')->change();
            $table->longText('sppdd_komlan')->change();
            $table->longText('sppdd_komwan')->change();
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
