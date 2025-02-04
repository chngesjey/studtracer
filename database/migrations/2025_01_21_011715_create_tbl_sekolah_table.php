<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_sekolah', function (Blueprint $table) {
            $table->id('id_sekolah');
            $table->string('npsn', 10)->unique();
            $table->string('nss', 20)->unique();
            $table->string('nama_sekolah', 50);
            $table->string('alamat', 50);
            $table->string('no_telp', 15);
            $table->string('website', 50)->nullable();
            $table->string('email', 50)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_sekolah');
    }
};
