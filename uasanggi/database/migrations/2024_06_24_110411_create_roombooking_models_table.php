<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roombooking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('roomtable_id');
            $table->unsignedBigInteger('patient_id');
            $table->datetime('tanggal_masuk');
            $table->datetime('tanggal_keluar')->nullable();
            $table->timestamps();

            $table->foreign('roomtable_id')->references('id')->on('roomtable');
            $table->foreign('patient_id')->references('id')->on('patient');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roombooking');
    }
};
