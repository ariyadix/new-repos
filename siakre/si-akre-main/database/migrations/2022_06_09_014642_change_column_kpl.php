<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnKpl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('kpl', function (Blueprint $table) {
            $table->decimal('tkp_ps', 11, 2)->change();
            $table->decimal('tkp_b', 11, 2)->change();
            $table->decimal('tkp_c', 11, 2)->change();
            $table->decimal('tkp_k', 11, 2)->change();
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
