<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnReratadtpr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reratadtpr', function (Blueprint $table) {
            $table->decimal('sks_pss', 11, 2)->change();
            $table->decimal('skd_psl_pts', 11, 2)->change();
            $table->decimal('skd_ptl', 11, 2)->change();
            $table->decimal('skd_penelitian', 11, 2)->change();
            $table->decimal('skd_pengmas', 11, 2)->change();
            $table->decimal('sksmen_pts', 11, 2)->change();
            $table->decimal('sksmen_ptl', 11, 2)->change();
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
