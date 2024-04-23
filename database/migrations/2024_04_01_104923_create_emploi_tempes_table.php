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
        Schema::create('emploi_tempes', function (Blueprint $table) {
            $table->id();
            $table->string('descreption');
            $table->string('joure');
            $table->string('horaire');
            $table->foreignId('salle_id')->constrained();
            $table->foreignId('groupe_id')->constrained();
            $table->foreignId('module_id')->constrained();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emploi_tempes');
    }
};
