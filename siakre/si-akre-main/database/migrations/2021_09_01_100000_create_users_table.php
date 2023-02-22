<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('username')->unique();
            $table->integer('level')->default('2');
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('prodi_id')->nullable()->unique();
            $table->unsignedBigInteger('dosen_id')->nullable()->unique();
            $table->unsignedBigInteger('mhs_id')->nullable()->unique();
            $table->unsignedBigInteger('rev_id')->nullable()->unique();
            $table->timestamps();
            $table->foreign('dosen_id')->references('id')->on('dosen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
