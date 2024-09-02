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
        Schema::create('sessio', function (Blueprint $table) {
            $table->id();
            $table->string('Intitule')->nullable;
            $table->string('promotion')->nullable;
            $table->string('mention')->nullable;
            $table->string('semestre')->nullable;
            $table->date('an_academique')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
