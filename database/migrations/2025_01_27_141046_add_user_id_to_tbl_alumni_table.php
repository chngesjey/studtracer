<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tbl_alumni', function (Blueprint $table) {
            $table->foreignId('user_id')->first()->constrained('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('tbl_alumni', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};