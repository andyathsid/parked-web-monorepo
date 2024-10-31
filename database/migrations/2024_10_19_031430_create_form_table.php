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
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->int('user_id');
            $table->string('file_diagnosa1')->nullable();
            $table->string('file_diagnosa2')->nullable();
            $table->string('file_diagnosa3')->nullable();
            $table->string('hasil_diagnosa1')->nullable();
            $table->string('hasil_diagnosa2')->nullable();
            $table->string('hasil_diagnosa3')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('form', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Drop foreign key sebelum menghapus tabel
        });
        Schema::dropIfExists('form');
    }
};
