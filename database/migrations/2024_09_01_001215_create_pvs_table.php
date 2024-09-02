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
        Schema::create('pvs', function (Blueprint $table) {
            $table->id();
            $table->string('local')->nullable;
            $table->string('dure');
            $table->time('hcom');
            $table->time('hfin');
            $table->json('agents');
            $table->time('hdebut');
            $table->time('hcloture');
            $table->integer('n_etudiants_enregistre');
            $table->integer('n_depot');
            $table->text('description');
            $table->foreignId('examen_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pvs');
    }
};
