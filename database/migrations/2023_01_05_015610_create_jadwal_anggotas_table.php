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
        Schema::create('jadwal_anggotas', function (Blueprint $table) {
            $table->unsignedBigInteger('anggota_id');
            $table->unsignedBigInteger('jadwal_id');
            $table->foreign('anggota_id')->references('id')->on('anggotas')->onDelete('cascade');
            $table->foreign('jadwal_id')->references('id')->on('jadwals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_anggotas');
    }
};
