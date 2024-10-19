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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('fileImage')->nullable();
            $table->string('audioUpload')->nullable();
            $table->integer('mdvpFo')->nullable();
            $table->integer('mdvpFhi')->nullable();
            $table->integer('mdvpFlo')->nullable();
            $table->integer('mdvpJitter')->nullable();
            $table->integer('mdvpJitterAbs')->nullable();
            $table->integer('mdvpRAP')->nullable();
            $table->integer('mdvpPPQ')->nullable();
            $table->integer('jitterDDP')->nullable();
            $table->integer('mdvpShimmer')->nullable();
            $table->integer('mdvpShimmerDb')->nullable();
            $table->integer('shimmerAPQ3')->nullable();
            $table->integer('shimmerAPQ5')->nullable();
            $table->integer('nhr')->nullable();
            $table->integer('hnr')->nullable();
            $table->integer('rpde')->nullable();
            $table->integer('dfa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
